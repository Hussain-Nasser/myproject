<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'hussain' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'B*#~C r^T.9F%]X! {-i5]b0^Vb2fDIAoK0sY6CM00+6{>|`.rB?[ wMB2 MIyl#' );
define( 'SECURE_AUTH_KEY',  ']#H4#e=*aJM09b0M3>y-J=(pVyaa<%=e8AC0WGzs!eP`nb9B8*wBE=<jT^vlp/I!' );
define( 'LOGGED_IN_KEY',    'zXl.rslu&ho]^`ka2xp[*Vt}KjO+#E-xE6:KtGd}`>scsFj*dJS:^pcT!T9nqmA{' );
define( 'NONCE_KEY',        '[>:PT!-adbB|eFq_~tmwg+DZv?(b,VAAX,%371Q;icNFRBxJV5XrZ-I9! J+Ds:Z' );
define( 'AUTH_SALT',        '1))4PRQ(4!l=c+/$h[p7(@`-~S7;?eb5|yL#UnJ@cyoFp~-un}KI?@Od!;p(->?)' );
define( 'SECURE_AUTH_SALT', 'Rc+0uI~_^+reV9ocBOs+?I=M_={<kKLi#*^!P$%%R KPD8%/ie,x!ugz](&Sc5ho' );
define( 'LOGGED_IN_SALT',   'jC13CTIgN(oWvKMd5Vg,C93@DpsgI;XqL F|ld< JcRmhkqz^cb;iJ82fn/+)f}7' );
define( 'NONCE_SALT',       'hl8uIatX~DD:g59N5bKLjy&6R1JG?fNjMfMJ|+[csL^5#)mg{b]j:Zv )a|k(^Es' );

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
