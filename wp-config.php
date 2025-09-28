<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abatest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U(l~v0V1LY3~.)&LzCEB{7pJrW5s.rm{/8aP<[PI{E.Wao!fRbTF}53aU!)t|DMd' );
define( 'SECURE_AUTH_KEY',  '1a|kH58?U2iJ=IYBPe}-kbpr7M}N)Nw#i/&:Bk4R Z?t,aSwcRsHw~, S[PGr7b]' );
define( 'LOGGED_IN_KEY',    'WsH)}^^$Jl>`G^lPQrjXL.O!(^4U>j3@M.S<vM7NscO!x.#/vCn79nQo6H:b?wVi' );
define( 'NONCE_KEY',        'UOt*5 h_<D3g]J=;IYTN_:>j!Y`?bW]C<7*/.;kAW4kj@Q]Hwq+I`-zwVo_*Z[LR' );
define( 'AUTH_SALT',        '}xt4)ge|O/#%Ok4ti!i$OqgvN`oX,4C?8J@_{:xh}wxR>xahQm,<xIActR*Dzs52' );
define( 'SECURE_AUTH_SALT', 'X.(H7TwFuv?UN5elG;jOvK!YF:|%nd2Nk`:,6YDzZ- a+2.EOjNzI3A-/4*,BMN_' );
define( 'LOGGED_IN_SALT',   'RYvV!d;DHRJCpC]!$=?xrRk8<O$Ak?n/t,*`XG`Qt8`sHK6= Sa>oJtDl97`h<uI' );
define( 'NONCE_SALT',       '=MPz$/@8.H6#<(#h0[JlT nu%R7>Rs)&~0ubIce9[gbSes|i MHSTC5.8Zj,Tjyk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
