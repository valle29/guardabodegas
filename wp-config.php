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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'guardabodegas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'uv#}.LgiB{9{frls3utz@{{13(o~]y9jq@?ZbV*zb$p4^yr!nA]UzZkA7h%NFos%');
define('SECURE_AUTH_KEY',  '-w?~.H|I1=}iQ;Pm>a!X`=Z!4}]`pF~-KkWSOL9@2/1Xoj%t7}@295^@/J+I~l:p');
define('LOGGED_IN_KEY',    '.;){>9v]x<hLl:Ran.;ndOZ-;U!6XO7mwEj`+I<%h|wRLq#_-[1#?;ijbR4su%9O');
define('NONCE_KEY',        'Z9(lP/ubE}6ai[%Csetvu5K[Q485[x@)>TQ2E]QaWa- +99vd?9~QTY{0A]e}|2h');
define('AUTH_SALT',        'j6kDC<rYBH3yygF,HtBAK|}uIrQDMz~|7G$ipgr^p+AC^$?4U$xJX`G84:/p$>fw');
define('SECURE_AUTH_SALT', 'JO+jN2pK&.m2efS2Z&9M%n|&7pGThkS=`g.O1)K70_9bb%syiw}A+_/j+[cD2t!Q');
define('LOGGED_IN_SALT',   '3#Zc||Xv@o;@ Oqe|t|!Q;ZNKbZ%Hq[}I{sU_0&):y=4zMEzy]WW~.K?5wb8numt');
define('NONCE_SALT',       '01>7jy@a{Y?BGVQ:Vc6I6C-P?UIbU^ SLDyAgYfFfS<}{xIsEFMBs0&X=r<llWTf');

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
