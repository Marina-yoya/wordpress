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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{O~!OzX}Jd}i6O]K8w(.13L~#~zFI<z/dS:W9~yjb>?K nrj# fD,$0?:M8Nu/dW' );
define( 'SECURE_AUTH_KEY',  'm@:H6@I/W?]%JxV,^Z8NuCPfgRc(T6iUQ+n7QP7zM~#Cox32^&}/uxSH?MvW##g,' );
define( 'LOGGED_IN_KEY',    '(c0dx|Zy(~b0$OGTabWB_1AI52$=Q4s:bG@42(DLOUUH+xNlOZ-3SN~P(.o+S!08' );
define( 'NONCE_KEY',        '>60XW%bHy3m8_f]%srHo%zFZho4Aq36Yjn1sq.8}<hGl=63T|)Z:Nty?&B&c+X+N' );
define( 'AUTH_SALT',        'a_]J~jiD Qe^GFy|d{o#}NYXOagJV8wEt 7(z/tW_^3_4HbO4~+ZZWyDmEGj>/]P' );
define( 'SECURE_AUTH_SALT', '{Z#bzi@y-<.H]ye{f9[ $QW2:q(DIG4Gz/>:9j5XJ7otn+h:+3rgDBGL/I~C*i`_' );
define( 'LOGGED_IN_SALT',   'z[k6VNF(Xht2}|u.~iH{e]20r`eeHu`*oz41[yWP(],j`_.7Dkt|L9`M~eLBjpr}' );
define( 'NONCE_SALT',       '6xk:cc>m?A6dU_eVTN8{@k6uclZC%?!#U7?[Z68eYa|cvNLy0G3h%]][..e39&u)' );

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
