<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace DuplicatorPro\Aws\S3\Model;

defined("ABSPATH") or die("");

use DuplicatorPro\Aws\Common\Client\AwsClientInterface;
use DuplicatorPro\Aws\Common\Exception\InvalidArgumentException;
use DuplicatorPro\Guzzle\Service\Command\AbstractCommand;
use DuplicatorPro\Guzzle\Batch\BatchBuilder;
use DuplicatorPro\Guzzle\Batch\BatchSizeDivisor;
use DuplicatorPro\Guzzle\Batch\AbstractBatchDecorator;

/**
 * The DeleteObjectsBatch is a BatchDecorator for Guzzle that implements a
 * queue for deleting keys from an Amazon S3 bucket. You can add DeleteObject
 * or an array of [Key => %s, VersionId => %s] and call flush when the objects
 * should be deleted.
 */
class DeleteObjectsBatch extends AbstractBatchDecorator // @phpstan-ignore-line
{
    /**
     * Factory for creating a DeleteObjectsBatch
     *
     * @param AwsClientInterface $client Client used to transfer requests
     * @param string             $bucket Bucket that contains the objects to delete
     * @param string             $mfa    MFA token to use with the request
     *
     * @return static
     */
    public static function factory(AwsClientInterface $client, $bucket, $mfa = null)
    {
        $batch = BatchBuilder::factory()
            ->createBatchesWith(new BatchSizeDivisor(1000))
            ->transferWith(new DeleteObjectsTransfer($client, $bucket, $mfa))
            ->build();

        return new static($batch);
    }

    /**
     * Add an object to be deleted
     *
     * @param string $key       Key of the object
     * @param string $versionId VersionID of the object
     *
     * @return $this
     */
    public function addKey($key, $versionId = null)
    {
        return $this->add(array(
            'Key'       => $key,
            'VersionId' => $versionId
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function add($item)
    {
        if ($item instanceof AbstractCommand && $item->getName() == 'DeleteObject') {
            $item = array(
                'Key'       => $item['Key'],
                'VersionId' => $item['VersionId']
            );
        }

        if (!is_array($item) || (!isset($item['Key']))) {
            throw new InvalidArgumentException('Item must be a DeleteObject command or array containing a Key and VersionId key.');
        }

        return parent::add($item);
    }
}
