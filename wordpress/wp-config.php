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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'vqUU|U+6WqD3oy+^OT^R Z<Z5-yWGhE80:UBd8DFqy5R`>=SKSVllX%3}88U/qj5' );
define( 'SECURE_AUTH_KEY',  '&p}g*pyxG-~{9XxSnoh]0;9?;Y#2$%#p1~:-7Ic }6O?t,BbFg_,;_~BEC]AZ-yX' );
define( 'LOGGED_IN_KEY',    '7 ]Qt^N?b~+fQl-3/)VWi74oO*}vU-MF/=~*u(*m@~q9Y3lgQ<FUO?U,PmV8;dOG' );
define( 'NONCE_KEY',        'h=d4?(1p]szS/tG%z5&|CDi+DnZP[SGR:V1kx(2DbrFVJ W7c+g~`d0$AZ!Z_wU:' );
define( 'AUTH_SALT',        'SPIMS,axQ.|:?5ZM`8D,VQ00e|bFmQR$&D[Jt9)[xYM@t)413zC@p;~,M+9jT*i+' );
define( 'SECURE_AUTH_SALT', 'jS$2!EL:&Q$:4jht~^r/l@2^Y8sQ-KXJY4&_y4C1UIz>RxoY69|U=adg4<!!`a,G' );
define( 'LOGGED_IN_SALT',   'q+9]g5J=l8#WDyvL^yv+o&VH#%j0 ~,)S.Mi[G4% ))jJ%W`s@DgL6nkOXAs5s b' );
define( 'NONCE_SALT',       'q+(!+/:g9V~<cmK~`&8{lTfa8~4,C#Ao}QwigMCK=/;cm3@&*wzpO Q8Qts`ea[#' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
