<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\home\site\wwwroot\blog\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'costacloudblog');

/** MySQL database username */
define('DB_USER', 'be2c39f643d4b3');

/** MySQL database password */
define('DB_PASSWORD', '4866e09a');

/** MySQL hostname */
define('DB_HOST', 'ap-cdbr-azure-southeast-a.cloudapp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^zj5tFk-9(mUFkht{/)u9oZih<~(gve>[VhxR}Q?n)|-W&4<0|EeVw6D8)._q;`Q');
define('SECURE_AUTH_KEY',  ':Z1-m5XL2Zkr+HnhxSU:>5Tq/xf:duF&^~/Mv|0l+liz|l-9{lmcI[fE0)dlvGU!');
define('LOGGED_IN_KEY',    'IYFkPG`-Hop(%&9a!:ZPga>@9q2Txi_4z<A[>HE]vK(+dY{ TW,>/l0Pr#+bmNo$');
define('NONCE_KEY',        ',aQd;[L;k>ttamoY{gO/=7_DNj4RS5<6F.kmw/1 HnIio;wv+pbnaYVk/})8Nt}[');
define('AUTH_SALT',        '6~0z<_U&;[Bh8fmbj.,Kb;>Qk?MiJs|cu+gW{Xh* J/^/g?u&rRJmq/@|S-^BTM_');
define('SECURE_AUTH_SALT', '~<*VhpF%Mxumf![h<?6wmp81f0$b~nSlbV>[^8hGLDrb|1YYS_&A|DGGTzqT10}(');
define('LOGGED_IN_SALT',   'sZiXEJB9t ct.=34mC-R t{$A<wg1qwD~{YtV|O@0ktD?@Ya>A}$&zVKq)0>A^B0');
define('NONCE_SALT',       'ch{-=p@Bt?u8]F+-$%6WUp*Y8&Mi<qnkd#[;&8bIL5*4+G4znwW4uq|%s=Y3[K.B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
