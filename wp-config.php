<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ibt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J8x4dFocxgJzAkit2RIHTxEjsySD41kIx8HoU6tWTZ73x0Djz1yNsd95LADVd6kO' );
define( 'SECURE_AUTH_KEY',  'V8K0wQsoMyGZZsMmd1pnrDskGOEeRqaM8ilzscGArOnRXihKhw5AgfPcYBvSpEOH' );
define( 'LOGGED_IN_KEY',    '2CW4D51XRTrD5Vzo4WrWx8uMoF56kfZFr1ncPujS1z6X99iPbuDWjcshqjwtx39G' );
define( 'NONCE_KEY',        '9Xs20WoJZSBSVBA3lg3RNt86gFhxegvgbdClAI8iyFkDJLb32iQMhvLI9t0Qm0Rj' );
define( 'AUTH_SALT',        'mM2cRLi9hQWU6WjyZPhUurvXE5PIvT14aRt3wLw58Q92zFIBFE14ZU9cAVDAeqJO' );
define( 'SECURE_AUTH_SALT', 'R5E10pNq4HPibf9GG3whvicxxHo6RmwmRTan2hEVHfCyas8eLF1AUzITegIrid5Y' );
define( 'LOGGED_IN_SALT',   'DPls3STCite4dx5qrUIYQZbPUyZHiD3chhGn6ewSjRNew9pXijQo2vuL7ulpwvUM' );
define( 'NONCE_SALT',       'mVmL83inrWRCInwViYPWSX1oX929OveARHNkmj1AUKVK2hWrWgngjHTVtRKNolXl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
