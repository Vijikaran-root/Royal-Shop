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
define( 'DB_NAME', 'mobile' );

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
define( 'AUTH_KEY',         'j.sJ8UORt>v|=9&>:5S/,Jx3H  -U}jX)O,>]tY>=hfWFUPidcgDPHjSi{8vk)-0' );
define( 'SECURE_AUTH_KEY',  '~q~HYr*W)=VNzab oSun.hkgsG2{M(x$J<c-b{k;E$3gX%9p0FUKp~LPXv#8=>2K' );
define( 'LOGGED_IN_KEY',    '~4dj!sI1QfGCG%[3jeI{M;3*OX#8:+lZ{w,Xd~c_HcDi11`]@qQh*1PhJs0RCKvX' );
define( 'NONCE_KEY',        's8eTK=iXL97f f=Pu>RC}Mh@DA6)&yl[jUyV!H1ZKpg1B,$W|.]/sh,aNQ5`92+|' );
define( 'AUTH_SALT',        'L#.AYL4@CSiq/#pLGF55fh<3F~| 6t@@#2taAc$rvT}zf)$c}&C!>#[KHnHk[c4N' );
define( 'SECURE_AUTH_SALT', '~t[?10yDBCmVY3qcKy=b}0j$Y8&QYuT3xwiQ4o+Er]1AEK#e JY$ZAIevRjpW<K7' );
define( 'LOGGED_IN_SALT',   '+Q2qgSXnL:6vAIdfUe0wn`gU&pEr&U:.-U@|`;rf2S#ScmAFg/y!Iw`f!D>kz$ZZ' );
define( 'NONCE_SALT',       '_vafe]&S94&jGROWhSsaS&@%sXxG/V6fRX]kUR71 9xmmId5+:Zo*}<[Uqw}D%Kv' );

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
