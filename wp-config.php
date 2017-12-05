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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'houstonauto');

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
define('AUTH_KEY',         'tf=.pevLOSBTCFZ-IuxqTs2yoQ!%U)TqH9wtV,szh -l5)d7(=#XlE4o7aQrJyc2');
define('SECURE_AUTH_KEY',  'jb)FT6{0B+hq7{?YsB@/+8nT+o?:Z=3O[&3!egL;K^ 4UoyY`~BP+pW$8O}CoQ{3');
define('LOGGED_IN_KEY',    'E7v1&gy1/8a[(gY=,-0.=:w^,HV#|saHS=HkOWL}n5(n!~YBc_/g6o3#,V!Dh^jE');
define('NONCE_KEY',        '3s[ZtW-%Ce/Z;lA|5 H*57vdtsPHG7SN|/E;&IpdE8a.Y&B1G[rjv~2G5>_v,~M<');
define('AUTH_SALT',        'Y|B1E4Y[Ey%)Q^$%z S#Ks/5:hC~7W!PJ`7T>TW&^1p4 o?a`Az<E}[Lt-.X9M 8');
define('SECURE_AUTH_SALT', '-/uAMMWdHyL=_E6~Dp4A0P2,cU4pQeEuVUASjVle*Gd^m[1p0&Xw!z_$Ymd`nY>h');
define('LOGGED_IN_SALT',   '3Bp>bgY7kRWM9/4y5#wYg6kvX?Dt0XZ*@u>!D*Uxm_fI!m_e[#^!n|rllt#1BXS6');
define('NONCE_SALT',       '0ODBE8ytWDZgQL~~ZdO!f. iP?%!`*#$poPl91A`-C.+!{[agTn2{M+P+Wa^+A(J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ha_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
