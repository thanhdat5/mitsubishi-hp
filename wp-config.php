<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mitsubishi_hp' );

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
define( 'AUTH_KEY',         '8:c,N~IT,VQ4/m?5Gn0T/kz*t1I:.J{@ ;MWoX+we[UzKLaAJ.:jIBNI/NtcM.SO' );
define( 'SECURE_AUTH_KEY',  '$<!JVSYa.XB^O`-.]`[Rk]hy.(1E=`+UBT!T/Oc#pW;~C94Pa;*omzw^GAsMB`W)' );
define( 'LOGGED_IN_KEY',    'ZH&f$gxX!{.AVrUE[8?MqfHn,?xBgrbj/]G.1={^SK{5.Rg9:R?!r_ ;9e$8o8SL' );
define( 'NONCE_KEY',        'FJ^ROpOlEoC4P*UbtG]^k+aIihTcj`a1V!.`/Rmzaf@.; 8S>ub2]^-SIE%U+*q5' );
define( 'AUTH_SALT',        'UyV _[6!:?L0pMV!g(]X|)7pF3IX , ~x*HHhb|bx%_<bl)w&o%zmvSlCE2.&pj_' );
define( 'SECURE_AUTH_SALT', 'Zv|!3(&{9qM6/`DWRz77VU0(qyF^<y=5`n&zSA!P1FUZtZ.3LyRK>wi*xq)KUxJ|' );
define( 'LOGGED_IN_SALT',   'H]DQ$Un]BW/x-VSrb&1oy^Pf1vx%k#W$AkUC*G]_J]Wm<msT`n+QMN`J%!8bJ>Uj' );
define( 'NONCE_SALT',       'bZjF7hB*3dqe1`>R)i1q+Ynfc>9JvmBd2Y ={QjCM@zL#[|OZlw?X_t11F6;.![c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
