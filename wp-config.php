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
define( 'DB_NAME', 'sagarwp' );

/** Database username */
define( 'DB_USER', 'birender_r' );

/** Database password */
define( 'DB_PASSWORD', 'fSpK6pc634eb!$i6m' );

/** Database hostname */
define( 'DB_HOST', '112.196.87.42' );

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
define( 'AUTH_KEY',         'gNg$C}zO`eOm&3c3f(>/<ujbW!!3ld?_{b/F~4:U;g70k]%2nkWEVTBWU}w$in?m' );
define( 'SECURE_AUTH_KEY',  'L[jWs-Vnj |70[Ij^k(!kxafK1|?79=-VeiHXUg,kYe(Sr?pbP+Sq3XN7S>=KMa4' );
define( 'LOGGED_IN_KEY',    ' :c;bi<]:&B6-`FQco/&Uth}V:aW8d6=&Zj{dASi:%&j*U22hZGuwbmR?>pbTh%)' );
define( 'NONCE_KEY',        'B;&E8 k;RG`K]J)J]_tJm[?iA.c!G&v67;=2]P.c+]sZ4(axz7Qi:U&_r,/>;wY/' );
define( 'AUTH_SALT',        ':BrtZz%3y+SiZp8r3n6g2tqMijHpn1W,7e&M_]msa#KX-ig:Fq0@<RI<u7VA[Y*0' );
define( 'SECURE_AUTH_SALT', '(t0SfhCo_l2rISyKLS:T8&.Kp8d^^$JBq-^y%Q$,3X<idqZ~o8X19;6DOr3fch+C' );
define( 'LOGGED_IN_SALT',   'fTR&^Pk4*Bnp~c{-Kh^=W$x*Yw_yT,_N:}Hu4*}4+HhvPGNmx,LKJ)c_6K,&;}>P' );
define( 'NONCE_SALT',       'e(%^gHi1t~6h@fpK_;W^)&75OtuUUHpSiXm(zWW&aZjDFcjqD$VzSaR.r&u]Nbl.' );

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