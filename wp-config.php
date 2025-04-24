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
define( 'DB_NAME', 'lizhotel' );

/** Database username */
define( 'DB_USER', 'lizhotel' );

/** Database password */
define( 'DB_PASSWORD', 'hotel@liz123' );

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
define( 'AUTH_KEY',         'l:Nm5HK 8e?1>f[$UALo?9q]qGW3TRboNt=?6T0%(HB#1yhn0(A.tnblr~$_[029' );
define( 'SECURE_AUTH_KEY',  '+jQc^ r(^`wDd~w6WsZaj_pP`_d)gE?#5lWjW CFAPpoQg<c$dkcJ2aO)LngUZsF' );
define( 'LOGGED_IN_KEY',    '7s>/)G/9BgJXaEZ|yBm0gX!P*P,jU]fB{UHqxm]qGMWqM}S|_Cf&N#K@YQC+n|rC' );
define( 'NONCE_KEY',        'zE)QcfF@pO45+9N7tkYAw$tCv rOCA[]T2O@X4H6o|tle#;jSk~1}GwEb#Hve,6X' );
define( 'AUTH_SALT',        'x@)od~%uygGN u}q5E$~lcF<BlL<$y,2_A}!uWsdunt !!>(~#UP7KxJ]Y!t.fz)' );
define( 'SECURE_AUTH_SALT', ')$DV)+!VP;)X8Osg}J]Vp05#>^O!Y;dY,m&(i!d^j0MXww`aG6(Eew,^-?xb&6?u' );
define( 'LOGGED_IN_SALT',   '0**~{qj~96FkZ_o17iUUHGqX(Rae</_=!-):v7kj/w80VVlQrH:ajbO%]Wk8xSmF' );
define( 'NONCE_SALT',       '.o)rn]T=CD@ZKLN-6`%XP-.z]*ihOSDuWj{?Rlui5@)Sy`wBI/5J2PW/-,wjF-u&' );

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
