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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TeaTap' );

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
define( 'AUTH_KEY',         '^~#4G0N@o2s3 bwfA~t4S@|S8j!<U[*zyxdGlkLeb<ZoM&rG78gl+ao/QD/5o4:[' );
define( 'SECURE_AUTH_KEY',  't@ oQvQJJ{U{CCZ!p>LBE}^0$j`EqrM{SU7d)zw,Fd<bt)<_`Gk(q)S>1I=prrwA' );
define( 'LOGGED_IN_KEY',    'N.;h,3a!AkBLl2Cz;;LG~S)aL&!`Ph>tswMR;-&dld)5hF)MxTF}:I67$9U#ot[V' );
define( 'NONCE_KEY',        'h<v%zJ;6=d.quXpZ/_S}[fehb*aLGs>h2b9f4z)[12/zH6[>g~Ra.v5;.];;sfOQ' );
define( 'AUTH_SALT',        'pVJJ*]bCCATm@fGTJ}XN`GA:>&r,=2,W5qBCD%V-U8b{.phrHuDw} NC{(A^,12q' );
define( 'SECURE_AUTH_SALT', 'Svj0.S+I]1saXD/)eO{c>EF|Sfch&f60dW!VR]66{qJ,;.ovh Rz7m?&,}mN-<1&' );
define( 'LOGGED_IN_SALT',   'L,hm#no8H[p85Z/S9F-E{V]J~GPb#D(t`!7]B87*sPt{V?]Sp/{G_`#2V>gK]U,D' );
define( 'NONCE_SALT',       '>m.BZ/GM.52LAE(U:u~j#V13[Hy9Kxx;!O.9^a3k<:Jf2F3Qaxme>m#rN:2iFsRb' );

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
