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
define( 'DB_NAME', 'brezellibrary' );

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
define( 'AUTH_KEY',         '-T.-|pE%B46bNH*^8<[=<:OuYg**6>wsJ$aTxX?J^1sd>|--W{|M&-dcnWUA_fYl' );
define( 'SECURE_AUTH_KEY',  'fB1tk`T@kw/7?&xEVpz$!pg*?<-z}_,#]6uy_?mlzg*+T,*DBLvk(_aE;gsr^Ag2' );
define( 'LOGGED_IN_KEY',    '9S$`yp+w>Id0!n2F h$ 29iN#sRv8RV-K+K_eRvu2Byk71~=YScp>|+_(<5cuAGj' );
define( 'NONCE_KEY',        'Y2YiO3R Qi$|J1oM`7lTgf-9*p_R`=9qWE|El~Nx5}8-)mSI_)HD&uEgsbHG2v=(' );
define( 'AUTH_SALT',        'Osb4%MDhJ`7PFM8>vf8^]X#YuBn5Nqu!b;2x1wG!QG)hY%;{6oj@K:NN]Jfd_7eW' );
define( 'SECURE_AUTH_SALT', 'Ovps>E{^q*$;Y&Y,Q%78tPK,Ui`f]q8CvPG|VogHeoSrvWODC*IF%3+o$N^fHUmL' );
define( 'LOGGED_IN_SALT',   '46+A}F3KC_dLwXhn;Z:A(lnLdq^dr=x|P&IV,_,dl?LCKzu<}%4 72x76{|.6%a;' );
define( 'NONCE_SALT',       'EJ/*M6Ojm2fB#IU,^YVUg4``Txd#!Tsdl5?IrWd<_:E&?Xnpu:qbMbtCTeTZRo6b' );

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
