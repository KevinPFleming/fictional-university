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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'h+Nc0fnrfbyOSw/M1+/NCLXNdm+UWDeuSflFWudPEFj1Ffrtx9gWTK02T1RWoxYJSR0vdB9sk3RInQ3K0tLq7g==');
define('SECURE_AUTH_KEY',  'ghatuSj9mBjFZ4HZvC6WtxvsXZcj4TFx5KChBKtuN2w7LMRFx7o2ldzeOCGK2UihlL9eM2Nb3gZUnYTZc2CPNg==');
define('LOGGED_IN_KEY',    'kz7FhBhZPKcegj3EobBkHtsgAr7gyfS3OGX8U3BxD6Q42nVm6WhAIuLJ68WPnIZmUMsu937ni6ZZi0k2quTUUA==');
define('NONCE_KEY',        'r69XerXUXC/rRfbKiwFdP6GrokXdw3LYjBCNpLB91tUNq0cenn+vSWYRpVx5DpV2Kcd7OA1qcXcuUiguK1Wapg==');
define('AUTH_SALT',        'QYLN4SFYzHKjh1m9IGXIt3+xjK/a5vXfQsaC1ByjNmrGqy8eN5CBdC1P4E0kYlCTljcCe0P1R9oMCXKYkXFSPQ==');
define('SECURE_AUTH_SALT', 'AoayAKDLNbczRessBcOGxiNUauyhkho3LivzdsyTVY2ZTxhbVQpGZunu6KpF96yqLBt3HSAl0R0ANGmbt0EuFQ==');
define('LOGGED_IN_SALT',   'uXbEIdy1GiEEj9pm1H2jf7vL92MnHjNoIvgJuqSBPvo76QqeAeJ1AOnueHOEsMq5xSm78dGfPQSAu3wKpPNQeg==');
define('NONCE_SALT',       'rUvg4Okssw/7l7M7k5d9rEN3MsbIRILDRPxJ7lgr4ukyG2PQMt9jmToAUk2yO4sFz8gTJ2r1TD7Zc94hPts49g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
