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
define('DB_NAME', 'dc-demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         'Lkj-v)Y5[N^O0>X$[|^?j1?r_U2!`)l|40(@Pd^nvj!XbWcH8<@d!Gy<#S[_D;^q');
define('SECURE_AUTH_KEY',  'K5`d8Ak1f1ZT4ceQ9AWg}bu#cDR2O#/zJ0hjxEX: ~ZCd |yvsSMHVT%B dF9`G|');
define('LOGGED_IN_KEY',    'zfYJO(_}1&fEo-;-MrznMk{ShGii=:66y/c@KYZqY7w/fNZffz/xB@66edq$(@_:');
define('NONCE_KEY',        'VHv:&R($!GOKjC#FhQL~Gj.yrN8ctOTR<7z[swSjA9b_/<31pYZKFn/-[K/2<9%5');
define('AUTH_SALT',        'k{AOSVaL3:a!`$awN67cN8Ew^ItYnemb!vzyu0fZoL@2NM(1zBiPJ;WEdHr.|A6t');
define('SECURE_AUTH_SALT', '@NQ@v).KMW^oPd=?7Tt`kYogL&&2L!?A>ewk/dXarwWP1U!z`iH2L&`xF tk0fZ]');
define('LOGGED_IN_SALT',   'o~CjUe2J)v_Q36C4!9B~@vE-;w0kO2s8cC*yH>^b@@pkg5iOIl~4(JkNA;n$v!k=');
define('NONCE_SALT',       ')L}OP`{@#D[P= s%yvz~(NsEWJ7ysTo^gqLr!CnHa!zX[+E.b>_W.YaXrF%hF@Sx');

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
