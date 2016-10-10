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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/New/wp-content' );
define('WPMU_PLUGIN_DIR',  dirname( __FILE__ ) . '/wp-content/mu-plugins');
define('WPMU_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/New/wp-content/mu-plugins');



define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG', true );

define('WP_HOME','http://localhost:8080/New/');
define('WP_SITE','http://localhost:8080/New/wordpress/');




// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`3rZ&TJbgD]%EDYlFoQEHyf}$<Ch>M(-k(cvQ8)AE8-o8x?t*j-67huM4@4{m3ls');
define('SECURE_AUTH_KEY',  'fF.u-$0i!n5hUwU9evc6oODbylTJLA;i*KrQ5_6@JDc|OZ1rV#{K<hr%3B>6SeGO');
define('LOGGED_IN_KEY',    'r8`BBe$q~5JO}-.xL8-)ym`DGZOhFcFlNLh],=4qSPu=b^Xx:(ljB>|NF629-u0g');
define('NONCE_KEY',        'B,)B<6R`:H)~jZ^Mq7KDr)F:ATM>xHrPc75]*!0wAaD8%OnQp`qSw?qq.M~ 5lX:');
define('AUTH_SALT',        'S@`]u#/G<Q,4k.f;7QgffDuZ=5m:q:(vlNDJ6]%^R)pTJKn%O8I)cv<E{N8pJN(_');
define('SECURE_AUTH_SALT', 'tFM>C+x9!sW(5TXu]bRws/IrEQ|1n)bI{%xV2~]:R|[4|@><iy_#u1_$LhR#UT-i');
define('LOGGED_IN_SALT',   '{u*RI)hU.0-h.>Qdipkv%-$H#;gKDg}9Mg.Q0$rkb=^ygG9.>iS7H~>cZGOc,_q1');
define('NONCE_SALT',       'd 5k;H}==bJd;Ljy#xZx @FTM)4YCAphn;%I?=qFN_fF,IB}s#WcCL>@Zq_=4ywx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
/** Define WordPress.com API Key */
define('WPCOM_API_KEY','bc3f88a21e28');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
