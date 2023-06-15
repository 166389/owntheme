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
define( 'DB_NAME', 'owntheme' );

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
define( 'AUTH_KEY',         'w5k7:Tb]o3(f[.(/[u~/zp=I@Ux2DI$HUm4_]y&mLH#wAJZtx5p$ckJ`1=_+}Zj+' );
define( 'SECURE_AUTH_KEY',  'rK>iG-dI0]2blR/w e^;&yhA^! 0E*U(u^5wk4)%W-B{-?Y&l[C~XB41;*hX|GB?' );
define( 'LOGGED_IN_KEY',    '(b;Ku}U8xPX>XE&inJxz8ukbQC]-*q(`O%gr><hm`_PdNzGv@HW*|0PWjQV3&pXS' );
define( 'NONCE_KEY',        'PO1qObsa(22w-?q&b3>)SsL@j1T]G*}H]Tv)~PnCt`d8lr3)o)VA=WJ{x*nN3pMP' );
define( 'AUTH_SALT',        'L:eG|(?iYhU~6!B)|uBRK!i8%Ot`YpFj!xuo5d^;8[RKX5@[`JBQk9>sb(`qTQ<W' );
define( 'SECURE_AUTH_SALT', 'nGepU6kVF7>sGp<QD|R9q];iw;O6,[d^wO#Zz^a#IFFs> O5,=.?ZCHWn4EUt*6}' );
define( 'LOGGED_IN_SALT',   ',NsV[r5d8jO-Dl8T-C?~rJ5-aY R._UDR`r>a|v?r5)jNWlblDjKn8Q1?._lcSZp' );
define( 'NONCE_SALT',       'Jj(^2o.jh[ok*XgQ6$[^i|]ykyXyo`Z<zei96vz7|Qsg6U>ZKQrs&;<*!#L_l K~' );

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
