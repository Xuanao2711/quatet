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
define( 'DB_NAME', 'quatet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'L~;bo,Ni2R6pD*/-gd+3p0Brv]i8]0J$w{L*SYRq&FymTKfAD#[>o])%-G;S51}Z' );
define( 'SECURE_AUTH_KEY',  '#Q-+41_-;`]9B*4J$AR,|?2PTT_i/,$d&U:u;La.+XfzJc;p#o/q.@K&^a>ftt2M' );
define( 'LOGGED_IN_KEY',    '9pk|LUG SRE#**7o,]qZpPH7RZsU=8E%]S3?:l~*2y(x3dmeHKFLC<rJ#kLD(JG&' );
define( 'NONCE_KEY',        '!;NH+(b3pam}E(@pFBQ=7bi<vo.&J!vTU]6U1@(0=F^$KabFeRPO-yV8JnQTEScI' );
define( 'AUTH_SALT',        'a<*E(@_8S@O:V}5`3oDBd5~nmi.l)[sG|0s+ka@#&4 ~$;:tFwNs;_]0!Evs3[ft' );
define( 'SECURE_AUTH_SALT', 'SW2g+?~-[RcYo~)]g7pB1A#y~7JwmqWXTmW&]lbwmn<P+e4a`5;tWl9s3I#x&|0U' );
define( 'LOGGED_IN_SALT',   'Tg5qk !n#7}S&@]^OY5*GG&*3&!%!^1:hhts]:Xq6Csp2fJv]Fdf<)>P- R7ht[k' );
define( 'NONCE_SALT',       'hIkvP):D-/~5%&P_II-wzd-tx2A/1aAn(5nmkOV9lf)F;#d/Pjwq9,:l{rm!<$!w' );

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
