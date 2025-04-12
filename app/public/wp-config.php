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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '(URbO*PJ#E$CL,hl;|2^<#k{%%XldpKG9b?|l!(.b~%C!0Sl[oz|AbT6KWeM9!LC' );
define( 'SECURE_AUTH_KEY',   '?)hztw9~5I^O#A]]L1yd5z1iz3PV8e*4WoL<!>Id.57XnlWVrZoOC/LuvxFn2ixQ' );
define( 'LOGGED_IN_KEY',     '.Bz Ir%s@cHd9Pw#i%fCB|s`o`i7EjTeH@)#zC8YD$O^tByT4,~eb3Go{|L|h%_`' );
define( 'NONCE_KEY',         ']%l&(51U<%dgcc~]I,j*4M |n21B;lL]4u1Tq|!^XCbF/4f9c/E;6EI+[Y-iPjAH' );
define( 'AUTH_SALT',         'iU%QHTVD-n@ugLzd2mJ}Q$+WO]h!Z4n[bTdG, 9#Ga*;H#a?u5HL& h2g ~9lhh2' );
define( 'SECURE_AUTH_SALT',  'YMS3`18:PN,]+aMjrQdL}#0dL*?DIVM*JAeQG5g@Mdc:OKYX-!-LV@EYk6?k:|-:' );
define( 'LOGGED_IN_SALT',    'sGSr~lo<N[BA2edI+^j526cDpaooG_B/JwTt7u0~$`jMs.D&!|Ex#iO^6Z =[9zR' );
define( 'NONCE_SALT',        '>l!W)g0qxD(p<}]e=-i;[Li<Aw;A=g!|qh55W?gPkp0l{Y(+kDS1TTI!y|Amd.yB' );
define( 'WP_CACHE_KEY_SALT', '&Se9[s(kaU6L5G$_b<(<Q<WWU>YMEbK4cwL0RD1Qog_9Gcco61Q.H~4X1.-.7D4Y' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
