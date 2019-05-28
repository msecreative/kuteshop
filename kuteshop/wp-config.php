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
define( 'DB_NAME', 'kuteshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hOIj~Y@6G]VIvv]6}[sqK<$eq0V16[fpwsnSGs>/F;%d81#zj)OHh;vI!X}K-BoR' );
define( 'SECURE_AUTH_KEY',  'YTdjSa4>(2hI/CEcX81*5^2CVbegPnB[vnEHv;:Wq-J8{&P|rw OfDcD+^<u/X/U' );
define( 'LOGGED_IN_KEY',    'l&7-I(x+-)sl3TBN1_eod.m<xXgG%Z}w14Hbr5]cilZMQj*f>uQsFKuVS?TGCZR]' );
define( 'NONCE_KEY',        '0D#Rst;dt*K98Ibhy[#/I*7)6js|efus_$Hu]lhn3GKkV*E3BiKQWZG5>_Ik+<A6' );
define( 'AUTH_SALT',        'Uv]FoK-ga;-_|xJ<~J8u7p+Vc+5IU QE+7`lwH!VO>n}B3~GpK=>KQ3*+DeCM#c2' );
define( 'SECURE_AUTH_SALT', '6@e Y7Y|WRw57;j++q4||4._;M_4DOh7qkRp3h/Mp 2Z`GM)PoC_3B(AjOUk~@Pf' );
define( 'LOGGED_IN_SALT',   'SyDh5^l%Mm9=^/dTG2.d[>*icvONu11)/PD+N>kr4L-0(;(9MgNwa%%We}MN8?5B' );
define( 'NONCE_SALT',       ')|8|z|i)-PQZA.O4k]AnDFU%|q$CnkwywW3*1L nq~!Q!-qwR_7!X4I<{1ZIWRWn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
