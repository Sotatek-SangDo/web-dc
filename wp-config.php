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
define('DB_NAME', 'site_dc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '256M');

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9v[]Zg u>K~Z:H?sn=P4DB_U1R>!63<{n<%_@j&y93*GvYB?NlQm(/ptcj=@2Uz*');
define('SECURE_AUTH_KEY',  '7H:p!f]hK?#S=7Q4}r;HWQIO!8fcj2?[SI/.Yc(sZeSkuDkzL_N2$So<:f^qAx`C');
define('LOGGED_IN_KEY',    '#h!s]CKZ!@Xrmzd;jd.IMq[T4z3aet)R`$U;eXi;<)_8Y4or8D4a];!Z<63fW>g<');
define('NONCE_KEY',        'I2TEMlFc+W_E]M99ps5?-)>Favtre]EiKX&o`RQ4cj^BBlBvbGVM]ugtt8nop9D[');
define('AUTH_SALT',        ':Il)X9JjUFh*j,5I4Y8h21tRpk}[dC7Ig|$w7$Y(%Se(;^]A`2yE>%,/eH*<3<Xz');
define('SECURE_AUTH_SALT', '`;$Tdsnen<`R|$;Mr@4({.q<]?98^muF+K`<;+`;?~)!ALtP]g%E=NVIYU(xUIYo');
define('LOGGED_IN_SALT',   '9g]@uLTntzB2-051z)&:1J#,p6~_JKI#t}L:v!7_jR1qS> `/jsG]$P=8+a`B?xw');
define('NONCE_SALT',       'No*6Ap$|JfEXP84v3 0Q!FeuF{Bu@~5+K2`!,/{C6PWd|0qaZgnf13tIQ3l)}yg{');

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
