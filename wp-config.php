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
define( 'DB_NAME', 'wp-githubDB' );

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
define( 'AUTH_KEY',         'gvc&klno6cO%9oxy8R^aw#=$c*1#MHCkd)zC;D,sCyCa:2LHJL4kK U+3@.]W+|0' );
define( 'SECURE_AUTH_KEY',  '$]n-r^xn.K9<PHrHz3zubg[jvez>X9S<9~PH,0#vA^18u0lQ4emaW2rtW.*k^6zZ' );
define( 'LOGGED_IN_KEY',    'T,^A]p}$Euk0rAU4#h:Re?K^^[/)i7.6&F-}1D@[NXA/Z%-7?Kwj|}JcJO@9*7sD' );
define( 'NONCE_KEY',        'qef[_a>QJs2Chn=NEgT&m$EgZQ~n6rxKTqk?]u&iZ_]:7ClG%:z}02rgRH/~ewdS' );
define( 'AUTH_SALT',        'BMQbq.un+9V<CuM>895*{Pi$_+`k_/|/&rdkurnQ6^So@&ydLlAr!g%UyjXE6qRO' );
define( 'SECURE_AUTH_SALT', 'xkg SFL[C`bKWnLL3~?e0~/0#a_RZ<9IXb;9.>`zCjJ*wT#]]%sOLnNdSsr7EX*T' );
define( 'LOGGED_IN_SALT',   'Dx$HT@C&nJ2|gE0D&_V}durNLG^hit-4S2}f/|A$`wfU][o!lYmXp~|ZC>v7?{bh' );
define( 'NONCE_SALT',       '9E>NMkN6[,`fod5;~`@S;]63h)#2htPwEBz<5EiM@77^+b(TAAB]KPY}&T2?k|:?' );

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
