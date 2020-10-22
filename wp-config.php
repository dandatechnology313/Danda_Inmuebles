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
define( 'DB_NAME', 'dbDelta' );

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
define( 'AUTH_KEY',         'bi`ex+#kZ2@C(3KR&j&,zD~_O(gL8{du*S#N?d(QH%M~&l<?0a7hD}w_GAxS.7VG' );
define( 'SECURE_AUTH_KEY',  'W[1xK0&^f45P_Gjk~@8yfK)OfIQsCAn;b9C3l@4JmNIB+TBZNQm;g3&-QT?`i+Bd' );
define( 'LOGGED_IN_KEY',    '&@rr=(;wN80vA+k2x39LBr:3{zEF&Z3~#[57WK AmwxHRxDJaQn:x~(!xbV`{@`P' );
define( 'NONCE_KEY',        'C/)e+ZlE(,X~ANKoL,~nj3`6-pY?}K*LisukC8n`}B47eAMPI_L!si5u{/6^b![1' );
define( 'AUTH_SALT',        '}4@8drT!7(MODo|_8e]ii2/V,.[aRg XhU/$M-pBu|~UY|Nj0B1vB`A0qmQ?3zk%' );
define( 'SECURE_AUTH_SALT', '?!X2L<>i)K%`&w:s6afUN;R$b,qH0&)5D{P0dN%&<I!l$CKf@a<t+U&zK>qHl-y=' );
define( 'LOGGED_IN_SALT',   '1J[0vg7quTqL%P*yY,  6+H-m;:C~O1:C2!Mcgn s2-A:_b>wb_SC=3Nk}/tP^1U' );
define( 'NONCE_SALT',       'P1c@J`XJWy)v%AJF<TDC#mXeNs9*)qDYtm)N=@o|1R2v3@$AaNW,Se0L r_+l*Up' );

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
