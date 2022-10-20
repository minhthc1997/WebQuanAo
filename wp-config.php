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
define( 'DB_NAME', 'webbanhang' );

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
define( 'AUTH_KEY',         'kX,/ER0mTCh`|fw-0#W?-nFqF;2ip~g*:G5?y* 5Y=V/vBYt1ZaZJG+8Qk[Rhmb1' );
define( 'SECURE_AUTH_KEY',  'i)}tq~Wm;;`RZlvcx+w7Sq^PfdfA{05&V+x{!>-,Xowf`eC*.}8+B(!fW$.Uf%&m' );
define( 'LOGGED_IN_KEY',    'pZd!1ml]Smp-M~ G4f/ySuiYM_ES[uNwpK`p{mRG=^<]&Tpi$O/#ppN.Xl(vy)rN' );
define( 'NONCE_KEY',        'WN>[AH`tkM2<)31YY:5)7f7RKQDO`w+?~b7M,H&?oeD6-5_sk*_AdrzM:Gi!Qyy,' );
define( 'AUTH_SALT',        'EvITLZY!:)W8$Si&cdf_8+Ix>!Is;[ u@SH?_:SavfPca#.6Io=+eSM=5l|bq824' );
define( 'SECURE_AUTH_SALT', 'Wq/^Ti5Er]I>=+^~H,zP^SR%WSJ)8:}^oP/e9QS2(e})/#g6.??}KOt|qlA65 i>' );
define( 'LOGGED_IN_SALT',   '@Kf.~-`8f@X,fs++voRu}zsZ[[FA5Ouj{@Hgg{8/Us`]$Vj|YN.X.$R;R`x%BMX}' );
define( 'NONCE_SALT',       'CU|+Amf*FX|3S-52<#d)&ms/ox;_cZ$b(JE:E[=BY#;hUpMwy<942gdym{Ao!fOM' );

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
