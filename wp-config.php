<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', 'root' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
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
define('AUTH_KEY',         'ZNModuxEyJfywIH1cQJSVOsnjqneDaaEJAM/Ia8zFBtm3ENw0eM3PWqDdJ4CDnnqqp0lMVsL8Dv/aCWeCDLCdg==');
define('SECURE_AUTH_KEY',  'DLn8AjzoBBVYDYj7XEMpjDy808VQt++mWqpIGbX+WN9OMIllDHLFcSTpTZ7W+3V002funJlEz3/u9tHhWW6DpA==');
define('LOGGED_IN_KEY',    'fj4yIxSdosuBwdITIVT91+g6kNvbyf7Z2Zogx/ADaP2rX4+anB9jppD+ZNXEMlaaSGqyNCsa7hYBTMtU4Md+QQ==');
define('NONCE_KEY',        'PXKT6E8R0aS0lAdbjLnKHz6MfcKaOguSKUq5L06qxArlRFVTMrCITYos/otIi7v3vZi0Meu+pwD5FyidSBd0GA==');
define('AUTH_SALT',        'LCj7QyKsHfUoWyQLRWCgieDL9MF7DVlza5aLM5tceirtl5P2scqYFG1OTBkiL7ffBFy4Nqi9YCXdAyVTPsxZMg==');
define('SECURE_AUTH_SALT', 'ShXZ3h6mg5YWnDMDNFpNQ6q5BDEbjJ3lcTVH/xbRTQqhBsjCRBCa12m1SKvVMOs0EY0PcMRJeznAj0AZLJJyww==');
define('LOGGED_IN_SALT',   'QXyNVugj61XMFh1OtPRWW0inSCcsbpwKblxNOeHI9kgDFjzuZrziSUwOFieWSgLpT507tyf69WqkLjubJVJ8mA==');
define('NONCE_SALT',       'SCwfqW4p3M8v2L3Qyu59UXeU9Ik04gmV/A5Ozg+eDIxv++1k4sApF9jZx+P9rYCp4KFcmUTOu/7GS/Tgc1vb+Q==');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
