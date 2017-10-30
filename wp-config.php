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
define('DB_NAME', 'codeline-wordpress-films');

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
define('AUTH_KEY',         ')lnAd7m^+#V7c|YY~^U3w8^eL9z-4/}%K5UUh[jG>W.P+9t.k`tK_$4}8x[XM&16');
define('SECURE_AUTH_KEY',  '@O/kq2Re}a5U%LJ=$BPs4R7V5ow0*ZP@h::+0r>(dqApNnwgdYXn)mmv>ZR3ifE$');
define('LOGGED_IN_KEY',    'jI^-Up+kbTd}02jy%F,Prw}cD$-,`~p?()IX8 ?s_`qSu DH$`^aqHx!|?oL!k#I');
define('NONCE_KEY',        '|?dt`EEI$!lxFJu638NcG (|8<Y/+yt]#wYy4u5Sn}D.|g`T9iYeAodB11d8nXz~');
define('AUTH_SALT',        'UN3jmz0(%=R-/A4URZctch!(RcLMSf3.9pxbP,km$B(5,P}E^?QfUf2dc,u}zRF4');
define('SECURE_AUTH_SALT', 'JPSct:YN_Dzh18$KCU~c(6t+Qu^F#D3]bVUGq!/|w.bn-oFrhpB;_5qKbyCmk#+S');
define('LOGGED_IN_SALT',   '=~,3yE!?wOBv/`]{/=zVJg!R,kD.Icb}2f^elk2Is6Uj&mFyF>>~{Q8bb] U>:A{');
define('NONCE_SALT',       'H}T[R7(!Rl|Kn/>_M!{${G_Vt#T#>I!sBK$0a!7[$vZ9WoqOp_c?BK4aL&;0W9Uq');

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
