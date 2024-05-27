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
define( 'DB_NAME', 'productos_lacteos_marlen' );

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
define( 'AUTH_KEY',         'n30U6/n:$xZ{da;$@zl4Yn3(y =Db9/E:OfSm3=<K!FEf<4B/N/kOi+Omp^uO8;`' );
define( 'SECURE_AUTH_KEY',  '(ZMdqtv9}t+02M]exVs0e!LM6v#WlKJXtvWl<DQGpFUE)SImlM4!:()SC.7H9k :' );
define( 'LOGGED_IN_KEY',    '4b;Cw~_l(&(L{GF-|F@{%&7(iYMml`i6R8p)EB!.b$vOR+iC|>w4MAO0zhcL>h~8' );
define( 'NONCE_KEY',        'LX ib{m6j[<^Vr^BTov[J}P-/oEfd[0%kN#H4BGAv_`x6{OI)-3s4NB3r&K[BaHc' );
define( 'AUTH_SALT',        'dlMOZo}~u/QnNa/3njjn-Ad5Jq{_s)rVK/rW 6!T$Cr+<*nVdS4EjM&4:qO2<}Sh' );
define( 'SECURE_AUTH_SALT', 'k&{eD`-o@7=%nnOgegx`T08[x-cVHt1J!(?*;_is5o$!Nhq7oix3XFKPx#1GkUTe' );
define( 'LOGGED_IN_SALT',   'bRQU*S:f%W8FUSoA9q-pr(F7kyKnXYJJu>`.<NqDBA*1!wJdOQ/Cz @|3Rnpff$p' );
define( 'NONCE_SALT',       '[&pvwh%<sb_iQqWPf8BFL2.FN[YNG+rMQQ9>FSh*D?<4Pb5^q>p8tida*K-l&q10' );

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
