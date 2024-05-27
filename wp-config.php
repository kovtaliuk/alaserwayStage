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
define( 'DB_PASSWORD', '1q2w3e' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'vP=)/wK(^yJ9FMj$ihj;vklj,b(iA SJ1~8~>7*u|~dA+y]N@d`3I=W{8IJ]~mA#');
define('SECURE_AUTH_KEY',  '<oi`!iGHMp~0OV7?&+*t8R|-$1 0!OF2W.MX!9Q$i}/-9 4O(F@NZ-*??r+;^l@B');
define('LOGGED_IN_KEY',    'VlD<[zu1<~_yqgRg/ *!#PM9rS*gEyAU>a|%D.H~5e@NDi{_EZDUJ,._^+T=lCz+');
define('NONCE_KEY',        ')D?BW$/>S.S@wz!O (.JE^n*t7<j$B4ZD*?+`(a,dh]*7W@S%ghRH|M@$|m{>m?U');
define('AUTH_SALT',        '6JsKel^F95OS`per{(ZRRw%nr_]I(4?C0~GT}|Q9@^]i++`unv8b+-+m9|+r-6]g');
define('SECURE_AUTH_SALT', 'uNOPqFp+j.,;ENt$}ose|@$|]@qN8p:Fp>ILO}8])#.ij-g.=uhGA,SLSIxRy,`j');
define('LOGGED_IN_SALT',   'ism}wSR*>n!-ogjmY=X.FAR`hG7F29yhq}9hwtv&s$}ppNkSz6:e8q39J,4 yzOK');
define('NONCE_SALT',       'JG*6-5-x_}@W?mkYo4|8$Ae]GzKw{z{J5TIt.tS{4 Y;esYLP{LW2Fh|8m9>s)Rg');

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
