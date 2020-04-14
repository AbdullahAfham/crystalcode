<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'crystalcode' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%o/EB6>@<Z1JE$(mkd~xaB$%E$73flu|PoN<?^_#;Lp9SxT>JP{{a::ngSngYAY[' );
define( 'SECURE_AUTH_KEY',  'C(?pDADt0$DM@vQ1z#J*zx_u4.S$t2Y4Tx$dK&B-8PW,q;j[qdphzIOY1z^TH=H-' );
define( 'LOGGED_IN_KEY',    'r[LT8G+S+YhGQVzbbS3xIECf5rV7hrR<f=<jU,cu<_cSogSr);r}NxHc6vim:o0x' );
define( 'NONCE_KEY',        '&(TkWi_Af{Rid;jsF;-w*iLzg#!Qz]No<vp(~a,}p8,$dsG:EaHJWbTuo] Loz#n' );
define( 'AUTH_SALT',        'DWUrGjPRsw)!`aHak#Nl=+6:9UW/2*7n?up52:9F0C5&bX7K0;+VlZO8]=Y7(*%|' );
define( 'SECURE_AUTH_SALT', 'i^t]e8Bg_>+C8$2BAMJ|x*zE%2$qqbJS!zC93HedU/MZrgH8&/5kp|fb?Qb^^j+#' );
define( 'LOGGED_IN_SALT',   '&Xeq^DAeSUPL3_z?o`l5(kJ/T0rM;.gr3yLms8KVD])}P+uCQ$~o1Xz2bX xB*Sz' );
define( 'NONCE_SALT',       '>e4tB]*tpY~t[6BX|=?473N=5&bh;Yl5]X.d;@Ed#l,D>oQtOVVS!C;QIH3_0 =I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
