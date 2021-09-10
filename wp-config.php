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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogku' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ':KL6]@A}|`iq$ju|_>jJZ(NN.78ug<t&8Lih((Vr5^Vr$x6VSG0.AJwOL-kB/(qq' );
define( 'SECURE_AUTH_KEY',  '_j;uyS6o`0<T/yyz;Xx9.9w;!!f) g;$!/0RIt_pz$*kU#uh.Ii[&Db0yoOOG!pl' );
define( 'LOGGED_IN_KEY',    's:*[O4jY(mD>&=SSPCB5JM]LKH3g<*9rBL/#Mfhj9]R$qvE[K:[bT>Vf]@Zv7^_x' );
define( 'NONCE_KEY',        '&[_iSAg}#bPs!e<!YfcKx$mwk3_x}Dz`N`apjoLSoyyx>Upqj#~s<RO`p6~+thh,' );
define( 'AUTH_SALT',        ' $BE6,d2~,W[hz/a}]*@&rPoS(}zGhPE,Tc??`^?TGwKkM)5N8yjv/2-)p;31xpu' );
define( 'SECURE_AUTH_SALT', '6M{}1pPXNAR@EtZ=Ky[t?qu=;LFT/r:W 8Y.ncQ&]`_bHrzf=vJME%k-Zj>pn8yr' );
define( 'LOGGED_IN_SALT',   'Ayh%U,TCln.`=yA^|&Fq/IYZ)?:bza9[Y6Gz(E@jPqZ mv+ZJ+X^Oxj}!P0u2zEt' );
define( 'NONCE_SALT',       'dQ~v+x}@^lWir+p6F]3>!NLmP0^.LO[p _Q6h)VPbR.?`EUXA+!?>Yn#~<&gyAi}' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
