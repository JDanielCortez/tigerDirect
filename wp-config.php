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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'danielcortez98');

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
define('AUTH_KEY',         '@cwH]W+F_{4Af1)bOoy @^m3{#9{G$Aha<2o4@eZ`sGkENR@sqBR]qTLACLHK=uc');
define('SECURE_AUTH_KEY',  '!W5`o)3(6SpB02B_L5E.i% o_}#txg8p8n>S$ @<qDI-2q&]dGYVB)[*jrY!K>~U');
define('LOGGED_IN_KEY',    'Si %HR5K_QeGXFGj5BtK_|p4n<D~S~3j%KJ:&9|hnGTxip/0Y?lGZ:uvN2JNV8~N');
define('NONCE_KEY',        '-@O/wda%V80>+Y~G~jzU7^h6dO/Y?BXAq/A(&2M.`/*%LNr7ejJB$hnrhnRa10hW');
define('AUTH_SALT',        'FeLT2ZW{%cz,dk3Xtv00(T_O7-KkwiLmriIL4|djb#}]n`<{5#7|?B>&LN!!.TnP');
define('SECURE_AUTH_SALT', 'j<]OEk`MlhE:Q}EzJEX1/*6@()})|*B8rh|B&|)[@|$ba_!.`WkfS(Bt2_Cj,{I/');
define('LOGGED_IN_SALT',   ']JCFi>P)fC5T,EfaZg$_E(%_y#STn]hw2mMg|/((;^f`>QP4YOZ4(j0<o*m .Jeu');
define('NONCE_SALT',       '!34EgRVDe,_$$BFvzD{BQ)NVvtJPjrfD8}m]3woDq]PNpkj:|H(%h*eQ]O4E1&wQ');

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
