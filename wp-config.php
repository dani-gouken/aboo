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
define( 'DB_NAME', 'aboo' );

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
define( 'AUTH_KEY',         'N+}D]R5Klli{&>tVIo&Vf$;i]g)0Z^rg^]vfN+k!el2}v`2YOI.%r5dc,<c5{lfV' );
define( 'SECURE_AUTH_KEY',  '_/aKmGH*VtOEQ(@Y-DjGl/k0-J)F6ZT_@_GB7gg-1wM17.k&!VsF`%.}`UW8;Ko/' );
define( 'LOGGED_IN_KEY',    'THo~|=cUD*%BXf<mc3=7-U&)TP~a^:)J4@g1fa_THRg9Z3-Z`{YXP!iwS*Ffw,Q@' );
define( 'NONCE_KEY',        's8;Q0HOQ]* cJJv]tyoN-Tydnm(OYT` )J7-?6M<_Otj+cP69+?_Pb(<:qgs%XeN' );
define( 'AUTH_SALT',        'ohFw9{zw{o+*yawWTRx~a%IZ<AG[o&|aQBg2%ZGNsoo<cpsgrjRA&[>h^`S/v)u&' );
define( 'SECURE_AUTH_SALT', 'fd.yN(R?*1wOdKNJnYcpJpD?J_{md=FVU@hvJ{aMGr6$T{W$WWKR$hf7B+f*<ZV$' );
define( 'LOGGED_IN_SALT',   'M=.0!49PxG2(xlX4eMnhM./ShA}cjqk0)j(Z|AO4v3+txL6z{.B/P=:$.~pH#LCl' );
define( 'NONCE_SALT',       '+{$=4/$>GMf0MB}e[@UTrA1Rh$@ucua*}I B#B=2vfZZx!@Bh~JVM9ibfa3^httu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
