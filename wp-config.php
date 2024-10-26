<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
//Begin Really Simple SSL key
define('RSSSL_KEY', 'sVErZtkWGYyj2StEfErVO2BzbAYyTXHLfpw8qQOgVBS2dF1SEd35f52fynT1SJa7');
//END Really Simple SSL key

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
define('DB_NAME', 'bdpnfate_WPLEB');

/** Database username */
define('DB_USER', 'bdpnfate_WPLEB');

/** Database password */
define('DB_PASSWORD', 'cU/t?Ay7Nh&S_YtQ5');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY', 'cc6ce0caea076f89aea3aede44a896d2ed380e736fc37cf1d51707877d79da03');
define('SECURE_AUTH_KEY', 'e79e6d7e9885ecaee9f1a8e8579fd4f46978554486558e8ffdcd6b358a710bc5');
define('LOGGED_IN_KEY', 'b64d0c32bb760ff7019dd0d965fb798c2ffa9a59f93ce8666296dcec278759ef');
define('NONCE_KEY', '0ea346120c55cdb98fedffdfa12425236eb61c00c823dd3bb5f97424a0669bc5');
define('AUTH_SALT', '7af7cf371dab98d9670f0e0d7473dc0f61d260ccc59ab5ac460254d0143637a7');
define('SECURE_AUTH_SALT', 'e26de95b6d2a52a0530d4de19a2b3ac18d0a27243c3861a74578ea22129ae811');
define('LOGGED_IN_SALT', '36beb469238cb4a1b99d10378c37dd8e05aa1b7426dc83c6e0d0edd124d0a89f');
define('NONCE_SALT', 'df6281a154a861f3761b76fd15896f403e93d0bd91e7bb9578c7f0476f086a2f');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gZa_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
