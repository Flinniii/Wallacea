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
define( 'AUTH_KEY',          '|#0TGJDo=q|~;H4SPN)At:W!(lL0Y >U29|m[1NOS.o}g_R4S5Hmc%<t*bl]pi=`' );
define( 'SECURE_AUTH_KEY',   'ti}K2&mm?IPBi`$YjV{{C$gt=2gJU}nGfkZc:U6M<r#ox+:1AjGdZnpe#zEV,i^d' );
define( 'LOGGED_IN_KEY',     'NduhRRJx]tmWo{Kg$J+Y3e@y,Ht;O`>aQ6_?7qC ]X0.KBt*#Ep]LZ6gEYl*yTrj' );
define( 'NONCE_KEY',         ')mU%#qIn4I>x-O!A?L/Gw7MtBl8K)T+?M5yLtj#@[qf4?n`B[_bdgbcBZSud%wtZ' );
define( 'AUTH_SALT',         'yS$|Be0cH%aiQRwbWFi=GaOiaJ;g>2gIC4i1*SDq&cfE,yqole(grZ2pak$~KE%x' );
define( 'SECURE_AUTH_SALT',  'ga-0sEi^kGV4W#fIoq[3&@oocDG/e2B7Pgw&+h9q,/oSUi{cvgiHg{Wod*bG2@=Z' );
define( 'LOGGED_IN_SALT',    'sL:%0bix9*4rHKN-seZIhAfl<~h0,jB?RT6Hx;{F;a+eoJ;#/k+i;>WyP`P0K@fS' );
define( 'NONCE_SALT',        'vk.v55&qwv[sm5pxXtg{n]Eac3;7=I,Mn%uzkaZSn)j*JRj(#r^r32I(z=u;BvUq' );
define( 'WP_CACHE_KEY_SALT', '71|_B7EH1 o`n+KXWDWb!14>n8WWoC*v4$Zc!Bx7G3r]=w%u,(?VW*G9olOaX8x#' );


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
