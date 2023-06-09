<?php

/**
 *
 * @package   Duplicator
 * @copyright (c) 2022, Snap Creek LLC
 */

namespace Duplicator\Libs\DupArchive\Headers;

use Duplicator\Libs\DupArchive\DupArchive;
use Exception;

/**
 * Class dir header reader
 */
class DupArchiveDirectoryHeader extends AbstractDupArchiveHeader
{
    public $mtime              = 0;
    public $permissions        = '';
    public $relativePathLength = 1;
    public $relativePath       = '';

    /**
     * Class constructor
     *
     * @param DupArchiveHeader $archiveHeader archive header
     */
    public function __construct(DupArchiveHeader $archiveHeader) // @phpstan-ignore-line
    {
    }

    /**
     * Read folder from archive
     *
     * @param resource $archiveHandle    archive resource
     * @param boolean  $skipStartElement if true sckip start element
     *
     * @return static
     */
    public function readFromArchive($archiveHandle, $skipStartElement = false)
    {
        if (!$skipStartElement) {
            // <A>
            $startElement = fread($archiveHandle, 3);

            if ($startElement === false) {
                if (feof($archiveHandle)) {
                    return false;
                } else {
                    throw new Exception('Error reading directory header', DupArchive::EXCEPTION_CODE_INVALID_MARKER);
                }
            }

            if ($startElement != '<D>') {
                throw new Exception(
                    "Invalid directory header marker found [{$startElement}] : location " . ftell($archiveHandle),
                    DupArchive::EXCEPTION_CODE_EXTRACT_ERROR
                );
            }
        }

        $this->mtime              = self::getHeaderField($archiveHandle, 'MT');
        $this->permissions        = self::getHeaderField($archiveHandle, 'P');
        $this->relativePathLength = self::getHeaderField($archiveHandle, 'RPL');

        // Skip the <RP>
        fread($archiveHandle, 4);

        $this->relativePath = fread($archiveHandle, $this->relativePathLength);

        // Skip the </RP>
        // fread($archiveHandle, 5);

        // Skip the </D>
        // fread($archiveHandle, 4);

        // Skip the </RP> and the </D>
        fread($archiveHandle, 9);

        return $this;
    }

    /**
     * Write header to archive
     *
     * @param resource $archiveHandle archive resource
     *
     * @return int bytes written
     */
    public function writeToArchive($archiveHandle)
    {
        if ($this->relativePathLength == 0) {
            // Don't allow a base path to be written to the archive
            return;
        }

        $headerString = '<D><MT>' .
            $this->mtime . '</MT><P>' .
            $this->permissions . '</P><RPL>' .
            $this->relativePathLength . '</RPL><RP>' .
            $this->relativePath . '</RP></D>';

        //SnapIO::fwrite($archiveHandle, $headerString);
        $bytes_written = @fwrite($archiveHandle, $headerString);

        if ($bytes_written === false) {
            throw new Exception('Error writing to file.', DupArchive::EXCEPTION_CODE_ADD_ERROR);
        } else {
            return $bytes_written;
        }
    }
}
