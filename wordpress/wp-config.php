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
define( 'AUTH_KEY',         '~Dw6U<Ladwd`duOZPIkrn={D[7pg* Ow:egSJb)hkT(;q9JVpa:kEQXNkM8bsih7' );
define( 'SECURE_AUTH_KEY',  'p@K2V2%X%eQcF}GBhq1tlC<;:_eP5-%Z{)~baybbA+sqWaRn[`!vjsZKYcx(9,_n' );
define( 'LOGGED_IN_KEY',    't}NTqFH>I/H|Abm6O6#*`]I*,H#X*#mFmtuFHmShe&tVcv}7ig$20X$@(z}i1v5%' );
define( 'NONCE_KEY',        '?&c;QF{Dy.>lRSUZ<l,noGWCdHo|XBWH$Ab*ZA5zo!6aX+M GQ#z.a!Mvup6[&=$' );
define( 'AUTH_SALT',        '8E/GakUh9.h9-Sd#H{@NU{x;M>>!>^F^} RcNNX .3hF_o+QijA9=!r-3/VR=jr?' );
define( 'SECURE_AUTH_SALT', 'H#ko|3-3/[?gIWxFVCe4eH@G<w#F|xj@~%oI;;gPz]~lJW%X2hk?l5 -G)_;z9/1' );
define( 'LOGGED_IN_SALT',   'cY5IR(<3:y2%Nf)Y+ED9630~#t1s.[vLO.,!NlmkK/|?4kAiQyYyb/lsFy,KX&>(' );
define( 'NONCE_SALT',       '}&3],7X-PTh<X{}z-235 s%vs{DZE%U8%wU`EJggXa`/#=)a2nXSD+in.9,3!GZT' );

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
