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
define( 'DB_NAME', 'intense' );

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
define( 'AUTH_KEY',         '0~ uP$MtIN[*H1F63x}#4H^t`oup!K8B}?5d1Fx]KqSR<1/H8[+bO%!]i:tTSP!>' );
define( 'SECURE_AUTH_KEY',  ' ,EBX`sam;}N@fMm)!=bkH-jS W$2]i;2}FZS!9^xylH=ePz!&uTu(?P[Tk?V:xL' );
define( 'LOGGED_IN_KEY',    'a1uPde]6_&9X-Ym6()4)aP*fpy+a}c};WTI1m4VxxOeD.@:^P+P[.O$zM1u6mcC2' );
define( 'NONCE_KEY',        'e^m?hme[>dTz4YOTbiC2DPsMs+vpjL1Y3r<hxO?lZ&VkJ^UnMV^H jKyPD9vzAC4' );
define( 'AUTH_SALT',        'G5:];XJly)(Pio9v)~EC9<Dv6fuk[Z7t~bMYDp~|dej[]Krd*eVAA,X],_zzSb.v' );
define( 'SECURE_AUTH_SALT', '<M#_%Yj`Y-Mwg2RhX7PvsW&e2<;o:_/xOI[sy.#a da<ibql @(&#*C5YoF%1-J1' );
define( 'LOGGED_IN_SALT',   'AsNTv3&T&0ZBU.Ol .yul28%?*SKEMeHT51U$Eg>2I3I@G_O5&OguY.P`^qCgAD*' );
define( 'NONCE_SALT',       'ixZpJFlJ>mNsA7 XD/NMB0tYzWA,Vm;wncIlN|?_03%R#:0hhk-r=.f]EhuA5M_D' );

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
