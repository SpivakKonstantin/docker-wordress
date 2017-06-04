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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_REDIS_HOST', 'redis');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#%[S>Dh#IhPDNA~ZfI&vvpDoDp7a5nHem-UI6|D._[)T.@?G69=?DhQ`C]H=y**l');
define('SECURE_AUTH_KEY',  'R.m.nlARvM q{WO^{TUDcJT&,3Mou%L^ZWS&nY7Ay:IHWx?Z/UM?BsM~/ur2Y:w|');
define('LOGGED_IN_KEY',    '?YQ7^3esy A.AdEE:}bf,u&QfgH0,~;h+y-faUCbSHJWATjp2CCHr,n6qN/Mh[vk');
define('NONCE_KEY',        'AYzlxPCyZy9:R;aijrShGHYZr7p.2}bN|ms@s+EzP$; T3(]`$8GyvOhJ=A*tf8Y');
define('AUTH_SALT',        ':krECd%mY+vqawt,<IDg:>u&F#4=8h9pe6&-tS+D_C!`Wm`!}mtLb5hB_mTedT}p');
define('SECURE_AUTH_SALT', 'H@tb=v;v@3FKtwHy@50P<V#EOX@ #js~fUF7D=ef4eUoP2YIT~NJ!f1)vUQU0~,.');
define('LOGGED_IN_SALT',   'E[.y{G/}M8)`HPY/-02VH ULQ9:n}B7zUHE<1>uR=9q5aafvA/Xe%@50tt$q-=$#');
define('NONCE_SALT',       '~T)mFz_H%z+-mxkVa1>lg*JQ%TJxv&^2U>+RbTS(_X;8-hY[ns~}cuaRHtLSEKKG');

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
