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
define( 'DB_NAME', 'otr' );

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
define( 'AUTH_KEY',         '$yT/*I:T-@Lbk9{h$6DSc3?HfL?Ug#[ >DyZ-MSwb1=cQYsxo=j4.d(Ar,K&.i4d' );
define( 'SECURE_AUTH_KEY',  '5lgYvh1$~59,.qs,,6a,=@#%pW)OLs9_7$eaD/=tL$M9:}s[ G6*`Sjp(n5^wnFG' );
define( 'LOGGED_IN_KEY',    '8(,a`D$>6v5ET`{Jn7A3^)q`<f$u xkUR%RLA:M=[lg`cKGc{4aEZrx^Oanm*yC!' );
define( 'NONCE_KEY',        'G> 49K**X>,nkvd`[1s{5u;{f%=N.EA,^a%Wz)lnq&F_YUfS4I^P0JDGeoKR~Oyp' );
define( 'AUTH_SALT',        '[v@_[M1 ]gv$`:3hyr2~-@-=[d @]@tkn-]hBh>054TYnVl[I6;ZXIe#99S9_2Q@' );
define( 'SECURE_AUTH_SALT', 'YLy-*lAMk{^a~pbO?r[EvX/D$8<J9(@=|LIG?p9d,dwT;_F5O?g6,XKD`tqYAsvC' );
define( 'LOGGED_IN_SALT',   ':O*4:y87|5K[zxp<x-X!KK<X@,I-VC*8vEH2;[VW#buy4FH`&8mkZ!W5a>_.q>%=' );
define( 'NONCE_SALT',       'On7>ZzGuE;nK=r1|oOU0}?w>`oIuq*F+m~F;y_,6p9??~}+^2fw$Yn<Jo}k:m<|E' );

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
