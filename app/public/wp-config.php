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
define('AUTH_KEY',         '/9X5Yb8XMjcfjZHDP4JEb7g25EmI4VHSl73Cspk7HYz7INMVCKCxlZNluD5hOnftS4uK8N4vlmCmShT4c56WIA==');
define('SECURE_AUTH_KEY',  'TGRWOZJ8UW1ZaHMCbJ8PjsJf5DATgv+XCRO0BY6XS7dzcDCxBTTxhWiGmuz0ID1LbU4VLafOEKxh9mHgRNpIGw==');
define('LOGGED_IN_KEY',    '9jRvQresh8l79i18vzxTgtUVZbP8Ev9Y3wCYj3AGL48jYEsjGd1dThQLj16L4XGPAa1X7crZnCxM4n+LcJWwuQ==');
define('NONCE_KEY',        'Mau3XTM44k3jOzz58LRr0x0v6r1la1HHvNc+4BqvFrnPMocQbLEw0cH4/8NveZ2knJbjWq8ceZxeqtbcs2DdvA==');
define('AUTH_SALT',        'hlTba0BskMMgPDDGSPAASLkybge4CUvF4xS21bTKAXaZpEzr2aFEM+w7BlYf/vMBOWXg2qGx03mau4m3W4fDNQ==');
define('SECURE_AUTH_SALT', '6nIdS7PxjysQOwsMiy+m7lfQY5dVwrI7ntvuOWpaHzdgTWJIPPm82i4E4JHdLVJuMMCJcCTspS5wq2PAiSlx6g==');
define('LOGGED_IN_SALT',   'JvyhAu8SiI6wNgCdkqMgXfpeBFN7+y0EBhbX/4M7oARNiTxT9iVjE3/bYctjYBsHU4jZT1iAshEWzp5S/ibPoA==');
define('NONCE_SALT',       'OmwX3Y6vrdLNrIUblqaEB405QfqWbBxAjYN3GPfNfWUuHhL1huRchllcOHzFwL6nkJxNR4C9lWTEcsh/s8bOnQ==');

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
