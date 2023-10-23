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
define( 'DB_NAME', 'Asthaborah' );

/** Database username */
define( 'DB_USER', 'Asthaborah' );

/** Database password */
define( 'DB_PASSWORD', 'Astha@borah' );

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
define( 'AUTH_KEY',         'h_aWQpC0e| #Hc0IfQozHFx=Wg-4UxqGk=(@bsl _a|$o-Bbf``APc+yBSu.yRhK' );
define( 'SECURE_AUTH_KEY',  'zK=->U07YX@`e+m=m;WkOYA%aTp2-WVXN5HC]&hC3(L%HDWP I*CqhjB0aHwOM_M' );
define( 'LOGGED_IN_KEY',    '2,lT17|>#1C QjBl)ReWy{zzU`_I3zuhS4J|j!ML8jm2wbM(fMjXb+Gm)9iAAW3M' );
define( 'NONCE_KEY',        '9/:6e$61,fcJ$>0cRo8~JNafb`3[:h-kHCFx1*Dt4.`BI4^VvJg/+i<K!OTRnz,!' );
define( 'AUTH_SALT',        '$0#qjr/%<wd,:)N/#o#929$gt:Zaw8,)DXMercgZOt{{C[Psfj=Q`Z18)q3KFfo*' );
define( 'SECURE_AUTH_SALT', 'kI^*dnWM6~wh~IUKcPkB9GPGQ&X.s&P|u9zP1z>gi,a=gr[4rxfR=/,.T,u#}+Ye' );
define( 'LOGGED_IN_SALT',   '$p;q^C:N0BgaB5nhI7+/EDq2cYu|(0jHSn0P6/-p3gRP>{:LJBg{a&)0%@-dC&;3' );
define( 'NONCE_SALT',       '7A:IulgQ;2fNvav)oq2Yr=0Ak2QgWJ)Da92yIXXRy?Ak.C!YzbQLvL+l%#wZg>o]' );

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
