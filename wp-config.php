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
define('DB_NAME', 'theugandan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sogoni1608');

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
define('AUTH_KEY',         '],}tHKP)|d;{%<;S>a#9jJ@DpktQ8I#nMmY?Vjug+[L(|;JsE~;QAH[|[|_M@47*');
define('SECURE_AUTH_KEY',  'Kv?qS(m|3kB<`qdINv1!lzv-TA$=,>4Xb}w0S=UqE8G&geebdED!g;Jipp<+<Ui-');
define('LOGGED_IN_KEY',    'ncSb:@dU>zs4C=,Np5k$jI:T.i=ZX!)^0phQ%/!IHpe8l>SBz=8t:@n5!Wf,0#a}');
define('NONCE_KEY',        'Na5z5m5:.{jFiE6pnh_49q?=[cT_/?l;H?s3?;dJ VMchNcAGa8i-+^k.z$wE{Og');
define('AUTH_SALT',        '*V!iyX+4b%[/rfxI%d9S6v[R ZZWxOE}l7P0IkTBXwUxk_k#n--B9JRb zU/YPi7');
define('SECURE_AUTH_SALT', '}a0N!Ca,ultm|Il1W &VO1D_?<lSDJ2 ~C./vdRe_$C|Ibc`+l[=vRU|mL?LhwZ]');
define('LOGGED_IN_SALT',   '*^Ebd)z.x+pqc)%m>yku3E~/cgJrkg9jXQ.+0d_^)k^f`tq#$tiY3|6s#6;d;k7D');
define('NONCE_SALT',       'QN-(T.(/agm$e yk2WTZm1f%S`~%b8;~j.9Kg/jEHS@}qNK!8sy4WK19`N^Ro=)t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tu_';

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
