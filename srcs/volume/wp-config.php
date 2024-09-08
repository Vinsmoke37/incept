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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'aymen' );

/** Database password */
define( 'DB_PASSWORD', 'aymen' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'aZ~_27;wau$5zPDnb>8c[d. }?ZSL:Pr.c=^C`I@n@W:T?],fT|}^ArQnK6WmT}Z' );
define( 'SECURE_AUTH_KEY',   'a/`rk>x#9B(2=qN9u/d0c7k;x|+1TMJTJ,V});M{,z`&eKWz>Usb{Qo+$Y)hm4|4' );
define( 'LOGGED_IN_KEY',     'd%fR(2r_A-%X+xY9:.B=Q`_gq:?<fz]Cz7p&Hk/?O$1XE*?m[F.!?:1)9#c:7Bm{' );
define( 'NONCE_KEY',         'zHS]~iWq%BH?AnOyAKKxvB4ztp)Y-(Z9m)>#Mtp+0nRRNw:P]mz5kG3&~?%`b6kt' );
define( 'AUTH_SALT',         'zarKND(fiDIjYH&h=<xr&8tBME%pihs6*Wh_-dP-pG,zS_MKNL6sUbS%?3#=EZE?' );
define( 'SECURE_AUTH_SALT',  '7cbK$:] SpoElZ!4**5g@i#l$O/7L:;rZF9DnaDV9HV.ibvg+pOwZz!Mc]@&J: t' );
define( 'LOGGED_IN_SALT',    'pQJ#kXtiV[~n,,/6e)k-GN_zMiG`K%+6[f6Tb{K*UVWE@D^DY:w!0h*[Uk6s^/]Z' );
define( 'NONCE_SALT',        '*H)*7^ Lt[<V#VqSaIIC(%;Y5U}%Hg&Zw74OLttB/EMPqnq*YxcWCM6V+4q^(D=?' );
define( 'WP_CACHE_KEY_SALT', 'Ye|+gN Z}hWJ!?z-*z|c18>l,9%r&;j>gou>U6:amuE&CuK0/!%ZiLT7H9;YT}bX' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
