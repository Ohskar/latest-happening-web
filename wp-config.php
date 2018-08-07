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
define('DB_NAME', 'lateHap');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '#;P@<n,fuw1B|@yisk~#24GSW4feSNUm@6@3K+83P9ksI[-`(3/iKUh`/,Uw{ ]?');
define('SECURE_AUTH_KEY',  '2*_g=?H^unA~27pTO|?M8X#,@[wX5mg2xneHvb v7/_mQDf8a! ~XYD]%r~v,FL<');
define('LOGGED_IN_KEY',    'lo~U.~PY:%DV[Po=.YuM)S5SNVDA~6BA:c@xfdnW/+Iu-htDGenC8eenuFSWzT}{');
define('NONCE_KEY',        'k63^5XQ.-9z6G-:QS2b_1Qjx5Z>^XTGAalyqY6?F<aP{SBpmFk(hG[_|4_z4X=l2');
define('AUTH_SALT',        '-d,dF`hD(*}ZO!AoXWp8v!jU6e;tEl5`hU7?)MpP2n&5M ~&fJ+7OgG|Hx}w6%qR');
define('SECURE_AUTH_SALT', 'W/Q8nyZ4Hbv0oD?U=b/J9&Fd;X|:!(:8U~l$Jk.muf`)ES}D9Aru(MN|]&PuE|&&');
define('LOGGED_IN_SALT',   '3nY{jva]H>Q55JM<1[km)iH{^.G,k:^nvCQrqzk,7| t)p{a$A5y{P < (+95CiK');
define('NONCE_SALT',       'm;KcIc8eF mvmf-bb67)v2+Dg#miAMlq%f*$7Hzwu?yPgMId DK+JzpodzWoK<}t');

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
