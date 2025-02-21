<?php

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', 'g8sXTXdIuSsbtO17wN2O0w==' );
define( 'WP_AUTO_UPDATE_CORE', false);

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// Enable HTTPS support for reverse proxies like Cloud Run
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog_propvr' );

/** Database username */
define( 'DB_USER', 'propvr_db' );

/** Database password */
define( 'DB_PASSWORD', 'revsmart@123' );

/** Database hostname */
define( 'DB_HOST', '34.135.240.241' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
#define( 'AUTH_KEY',         'put your unique phrase here' );
#define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
#define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
#define( 'NONCE_KEY',        'put your unique phrase here' );
#define( 'AUTH_SALT',        'put your unique phrase here' );
#define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
#define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
#define( 'NONCE_SALT',       'put your unique phrase here' );

define('AUTH_KEY',         'rEi-FR?/^Ana:4D1UV>`B!8}zJ8@ZO~BeL|rh#wL]8!x3B%0U93A0ao Y}5x>$$d');
define('SECURE_AUTH_KEY',  'h>-Y@l5kF,U@$C]Dk`q>Je>_||j^NRLGXg+DkE-TugEQ-s6_ sVuM1<s^sE]=xT!');
define('LOGGED_IN_KEY',    '{u4|V~U0]Q(#j8||9#-ZtAa60W-o[/<*-P+;ECV?O+ #/t?xRys_jvxXePPi`NV3');
define('NONCE_KEY',        'Gi&%yEz6i|8|Sn|FPb9D+|ZzdemG!kg2)uFux>FcJc0jZ@3+L`(;6j[W.dy% Y9H');
define('AUTH_SALT',        '-9V*.To,L=|1;&OtSRvX1|s!m[KL*w>U,K+m@u$T-K`!2B_d+jSHZuH(o; !w-WK');
define('SECURE_AUTH_SALT', 'ZB5>O)zVuUQ(J$J9$N|:M]`p_H_*t3.e-WMNQ^kn9V<!F--`T[(X>hWKLNgzh^Vz');
define('LOGGED_IN_SALT',   'e}gBK9>nW+]mg7fJBx;<#s[><Lc|<VxDMZ|%6y>G-)NX&,4Q;jb8icUlBB%J^j(E');
define('NONCE_SALT',       'EW*y`:H:@]j#e:?sBpWa-eo8<-`{@>g`<TFc;rltgu`3f|w?I-cTdUrUyXjk+zPK');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define('WP_DEBUG_DISPLAY', false);
define( 'WP_DEBUG_LOG', true );
# define('WP_HOME', getenv('WP_HOME') ?: 'http://localhost:5000');
# define('WP_SITEURL', getenv('WP_SITEURL') ?: 'http://localhost:5000');
define('WP_HOME','https://propvr.ai/blog');
define('WP_SITEURL','https://propvr.ai/blog');
define('WP_POST_REVISIONS', false);
@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '128M' );
@ini_set('max_execution_time', 600);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
// Set the file system method for updates/uploads
define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
