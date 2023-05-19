<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WP_CACHE', true );
define( 'WPCACHEHOME', 'E:/Xompl/htdocs/elemo/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', "ele");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "");

/** MySQL hostname */
define('DB_HOST', "localhost");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'zZt0zq%4n6:T6f)88GSJaV|LE6Y3#+VPPi6-Yos0ux*74UtqP/S1:&2e!]#T37)7');
define('SECURE_AUTH_KEY', '87E+CI47I@X;7F7&/(gn)-VrL5#966Sw7+#b:l8f3x1ZsA[C33;:SAmmZTOMZ6n!');
define('LOGGED_IN_KEY', '0b:4_aS*64g-0~xJua6;M4:tjJIAm3J9n:CW070ZgUu4L35&1EBBC_-:My|Hq/7!');
define('NONCE_KEY', '-2fkh3wV4kEh!*5!(yvmal-2~O92U_5ya#9eQycFb!L|7Ep;70OF%[SZ68XMB~I;');
define('AUTH_SALT', '/:):Q~eT/Tif!vD8@XH&Wm4h(YSm5W6|426xl8_Z8|;#W01V@0D5(B52@8Qfj)F|');
define('SECURE_AUTH_SALT', '7_7m_(1jr4C@c[#5uy37WhyWKfs(9qQ70coj0Cj)5U-W2@hH2a29|15WAoyd!]ua');
define('LOGGED_IN_SALT', '1k+~a8-sy1v_534W4%i:240|iEv1nO/ss)yFzq3N7&q)18eqqUcO_zp!Z%xkn+4Q');
define('NONCE_SALT', 'v[Lh_UuhWO27iBM9eFy(|8x09AI68a@id~#Y[[5p210w7jpYSq39rgN/Wz726H0S');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_CACHE_KEY_SALT', '22d770bdfe00444a0ad9ad75c939d344' );
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'DUPLICATOR_AUTH_KEY', 'Z8-JWWNTPz YkQGI>u9Jwr}wPOoVkxiI..4U{^9?mL&n5g`OE/6r),e,=c-mrP4{' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
