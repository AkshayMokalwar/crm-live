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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'M&Z75}x8-SA1>[LQV>MhBOQ,r_cSbjyYV1 L.f5OwpG-U{]H6xEzhN?Lf6&y*_y#' );
define( 'SECURE_AUTH_KEY',  'N5Xdou)e1O;)jc#/%Y,&aD#7YIG85b?2vQ8Hf9Pl$*qJLu6}_2Iw<W5IpbWfy-!5' );
define( 'LOGGED_IN_KEY',    'yRxX*zRtV/l^0OCFn#:m`+DLs$DbHr4jo3p3zn!z)%>f-dQ%UUV~eU|jqL` eFXV' );
define( 'NONCE_KEY',        ']nm2T?6(6ypr/98ZHPx!{,t0*%W^I_5crJ2}?$j.m K&AaM*tM/XBPtH%Tm1HDoV' );
define( 'AUTH_SALT',        'eEi{V#!}Fd dE`<Vk}V<clGK%R+!tD-iGS(e:@6jxaj/J,?#uu# Q~5FsLpIP{n$' );
define( 'SECURE_AUTH_SALT', 'v1UGwE5_twL?$Y*YDqp?pj9|Hjuie0lB)=p4#`aMD[z@{p.r<7|`y6aRmUU{|)e.' );
define( 'LOGGED_IN_SALT',   '3~;;+(~UkD1K_GJc(cWv?KOP*r%5[m=hU]#5j22djxKa3h<YpMYdyCe%c>_q0 uA' );
define( 'NONCE_SALT',       'r0kDI5FsB/jueM_f6>4zmVLUPMaWU#E2PA|,D]5y^8?JG+}O2odwiYAM:;%_lz.R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'student_info';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
