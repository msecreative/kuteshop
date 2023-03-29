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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kuteshop' );

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
define( 'AUTH_KEY',         'Rn!h|{WMP-@eAJ}x|oxUF?e>_[, TE X?Iu;Jac c~c&0vL>Y[Q*3L&`t)<8<9XT' );
define( 'SECURE_AUTH_KEY',  'y*+_H*n;oVcwU8>!DU2CQD4JBo7mH)EQ{(h)&fj@c&NYNzd_H`17^s$$_^b}Rcm2' );
define( 'LOGGED_IN_KEY',    'du9,x>WZ|a-3*~Z# -Us23#n=rs!u!VJG-D0HOEs*H08S4CBf4t2@ayNR=S6.d=K' );
define( 'NONCE_KEY',        '])+kape^zZ6Px[,PdL4]E]ZHj#+.Zk;c3-bIWfWUR.%,*%hlrr+OQdm-;gfm?:51' );
define( 'AUTH_SALT',        '7!Dicec~w;w.cKa1Kx1s,_svmLATQThh*Vsr{VE5Zu.O1j-/h_mPruDhtwXdCRVa' );
define( 'SECURE_AUTH_SALT', 'H|Pyv*V6i55u$B]A}{$s%r3lHTdaN&)*HYFmg[qL<EDcefU8~>C>02<*J;L(#>:E' );
define( 'LOGGED_IN_SALT',   'm>OM iRoCYuRVWD_kMJBeM@B=x;#0 ?eD%}y0FW4uZ ! H8pr`RcechUEbcZ,t]s' );
define( 'NONCE_SALT',       'thb3q2%(8x|~2,0~llu%N?GIs&Qu}urz ENcSjSTD@ri/au>N_<!|tiSV%pxtCX?' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
