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
define( 'DB_NAME', 'rinaldyportfoliowebsite_db' );

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
define( 'AUTH_KEY',         'aN|&JhX2PB4y9[Ko1T^cyw:<txA:2Lr)v,{7{HHpi[8CaCh)O?t5Q%vp<|{BrGn4' );
define( 'SECURE_AUTH_KEY',  'QlT+C&&c@.zO67{P!UOZ/c@1sb*|UI<^=ANCokSUoL8*sf$IAT/TL|?HVlQLf#6%' );
define( 'LOGGED_IN_KEY',    '`MHO0lwb-cWO8yB-UlZ>t;zgb*fAC^^Z_PNuuhhCU~rjwg.NBZEnoD~c/.EzkbVO' );
define( 'NONCE_KEY',        '50&7[gk,Ysv[[4g9`yKt*k^hLv$jKBUC&lcpEP58F^_;*-Af4i!rxv0#/Sx(dfDo' );
define( 'AUTH_SALT',        ';)*rzQPJ}p{0@lz=|THC@fr (-WNzA=uj>.4/u;kSed~bqIF55uM?aItk3x{qG,:' );
define( 'SECURE_AUTH_SALT', '#T{R9jZVfy{?7DqzmFB?Pnwzb5g=j2#^}lF B~/pYCIbY=P|;_<*-j .H5%+/d>N' );
define( 'LOGGED_IN_SALT',   'a$S[&An31ZY-]|3gY<SXcFtf4ZWKI-U9,N&D}&gnuvj^5O&?=Big.u%l`gt|ehRu' );
define( 'NONCE_SALT',       '4B,5= Sh]QV7m_M59~!p6NO0OwvEDur]!o_P7w]j*E)(!^rU# N>:l+[{-2)fqcT' );

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
