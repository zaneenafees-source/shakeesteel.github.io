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
define( 'DB_NAME', 'shakeesteel' );

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
define( 'AUTH_KEY',         '?.XwN~o!pv0IKD1!cujMSgk4>r3;^L.cK4MN>jMS/jzJa]YnWX]UlOp>dY@ax%T.' );
define( 'SECURE_AUTH_KEY',  'HG1.a8Pr2)=%OW.hR4soGCh7LWL%]jr):eJZIgvz1+Z,%ujpMi1qa!U|pwhQ 6h]' );
define( 'LOGGED_IN_KEY',    'F>)sQ,}*g,f7!-e)$jn34BMxA,;oG}!f/_{=OVS|*n<Emx3kE{`k{L!^?wYUEvrV' );
define( 'NONCE_KEY',        '00?l9Ga[RElq7<BUF0rO@E2Odm~x<8b`Ubw)$~V3ISCNkV2<DE)u%lZ,s}stkYo_' );
define( 'AUTH_SALT',        's6nK$G&1smRGr)OX17PN%c6J4jr}FZi&xUd^QCmGdp&WLFRTqSu!9{${ip{NAdXd' );
define( 'SECURE_AUTH_SALT', '8[Qs,Xg_`w(cE`_(fcXi|^ETJ%I-q/5P-Z*A+AH?AFKRU{>mj.[VMG.laZ?7(5$R' );
define( 'LOGGED_IN_SALT',   '[;21w>*Z>Zw@`mT0#PC`Bl^Yfvk%jf_:k| y}@{)!S>E*Z d@oHTmMXQ>iUga}Jj' );
define( 'NONCE_SALT',       '@<c0NQuPQm4eSs$?ZQ:.PPdNiH8>|SNfbv|)m5k8eZ}UG^:=o>}?}?)6dI<C}f~Q' );

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
$table_prefix = 'sk';

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
