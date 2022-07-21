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
define( 'DB_NAME', 'degordian' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'C:lC}Yxeh6j))VL;9%ps^$f-+*l2GPhP~@{zmC#$_Z:MParwUoub8~DYv(0{Fd0m' );
define( 'SECURE_AUTH_KEY',  'c{lh[We3 w*uo<zgVD1!4`-)_.%X-1l4y[p6V1AGqO<R ~.ER.vzd>C4Y1tA_&O}' );
define( 'LOGGED_IN_KEY',    '+EUo&w+dF!`TS: <qnS8)jhkq<s/D?{$XHy(A%6W#m13LgH5L@bh_MBM6V%@`B^U' );
define( 'NONCE_KEY',        '?%D~ +BFodcyDsQrmb&iCpXT4f/lhtsH0oU4mU@LFA7j%D$~qLXz(dl5Ck^S9!M@' );
define( 'AUTH_SALT',        'FLPVohq=Ag9`OgQxRWZ#_C+Ia8yFh@:R&LwycS3LC*DlUK$s]W?L&n=[>|@zK`QH' );
define( 'SECURE_AUTH_SALT', '|^)v|45jx`fmH]J0U5e~^#K~(:g5j)`=n-7H*b;w_4?+;56cjJtyHTh;39[9&{vW' );
define( 'LOGGED_IN_SALT',   'a5g?g9zU5Qdh<F&L2#<C5L^DB83~VuA% CHU[RSn|57/PbJX.PDmGbM(|6UTxnV+' );
define( 'NONCE_SALT',       'ddi0I?2?iu/Ah$[t`kneO4kG,_f@HJHbA:IS 7W?V/]Et&_#v(Pi9h|t&S@^|8b6' );

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
