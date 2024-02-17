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
define( 'DB_NAME', 'praktikum' );

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
define( 'AUTH_KEY',         ',,1NIu0@!<2zL(/4~km&!h:ATP0ri8qg+Nzl^4]&Z)c4<!63.mtyJUfY75D[VtgX' );
define( 'SECURE_AUTH_KEY',  's`lUxq8^QE9m`^b5U&T]j%)8F#m>6`%NVTCq.KWuM.p$BkVs`#Pc_DB@CP~[Kk3`' );
define( 'LOGGED_IN_KEY',    '9o1zS:fxUDEOx W=WUr)PO |y;z.Rpa7vOM#9Jv<w*+4gDp,aG3!?j~$:Oc(mr#]' );
define( 'NONCE_KEY',        '7?d^?{=jQ6_`;~m2Bp{>#W9|%yY4UvAA{L<sD0n:s84@&Zp4SLVzp^inS:7!)%#p' );
define( 'AUTH_SALT',        'iTIK2jE}0T3DG^*_KfFX3P-fdBSX,~0rk]wgjbbd{a|@A3Gc]8w,bH+<y.PkyBr;' );
define( 'SECURE_AUTH_SALT', ';K]O{Tl1G; O%Xc_f`H-0g=6!X[Q-VUI4Oy)@~*/NoV)Mc)Ta/~!rahr`D]Fw t_' );
define( 'LOGGED_IN_SALT',   'DSzK5AKLD !5Be_;!u~go[$H3QM<Vw$*`E2}~#>BpPeG-}Xo+TU+3F~{]-b_zOU_' );
define( 'NONCE_SALT',       'tL?>(4N<VUS[}mjJOMmbSzfpFRDs/l60St4=LPVIyPhDg]C2zJ!BwH}bt|nrP`5X' );

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
