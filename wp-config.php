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
define('DB_NAME', 'educar_site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'D W#v|1MZH>!Zeqj0Xf,7Aq|Oez~N,GjvBKo`{sy$(aE|U8|iFC[fm{kN @!.HGc');
define('SECURE_AUTH_KEY',  'Yso-)>i|P;(s`8os|a@<lK.@5?g1K]p*>Bq1~354~b8BI_/c{eWR=xFRj=)m5e>E');
define('LOGGED_IN_KEY',    'ObXf,JIG]7s3Qh;_;X=M7b#3h _~6_VwwwZ+T/dTuWSJ5EbuOgZIeaS*wM2IwgM-');
define('NONCE_KEY',        '97Bl?dY!lYYkMUU6bt}w=(>hy5yueljL1{P&[T(2T!U,tCWl2;gc^6V%_73gzc?g');
define('AUTH_SALT',        '^gL=WIeB}OWm4*[,G2>}(CnA]I.u|@ {z3Q982V4,bdAw_U(i.*a`WB/>(Mu*).Q');
define('SECURE_AUTH_SALT', '6ej<t%cwL>3K+p~,$sl#vk5)Y|@Eca9u|rw$J/{{+b+]bb,/Y{~oAB.[9@M*CDVn');
define('LOGGED_IN_SALT',   'MHLL8pzgF>g:Zf,(YYwRI!f3=5 a(n$OaJo#70Sx*)7@><JK3U6Xj2.0T08k;OR4');
define('NONCE_SALT',       'BLOblke^3OB[>-}9x#h]=F)C-*-E=P$gv%?<@%HkYc1#NVwIy+, C1oS?1RyXs7`');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
