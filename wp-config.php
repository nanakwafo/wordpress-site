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
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'newuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'am9~n!!U2S(Vy4+0@uB#,]LfXvY1W `RHZr4{2.fm2]X ~H/YUiDact>+t&zPVZP' );
define( 'SECURE_AUTH_KEY',  '}6&6%4yL+madF%l*bkmq~6wt8%O|GqWf8Zmyh|HetWurvvB@.^Gjk2^^AtSte:P|' );
define( 'LOGGED_IN_KEY',    '&*]&[qHds4>a3>]N,q6~w8^7^?!`5{T7}NI<&V4gIn]YRC<AMOxPy &G]vRR~8m|' );
define( 'NONCE_KEY',        'Bj.v72GyIk*yZq*d&l&4]bjw`?/4J7#:bP<2<h&S|x`DXul.a{kltw/LNNANG/5u' );
define( 'AUTH_SALT',        'ly,J%d?X-irgs/mTB[yw.luxA1 c%km2>2SfOs |b%9yR/I<{Y<oN>AJo[Nv|wLp' );
define( 'SECURE_AUTH_SALT', 'cpKixbDJ9uO*9K8b~(C;.L*CJF<+Rd~4fHtd M}q 2t9Zd|$l=<Fj6=6Obg2$$rb' );
define( 'LOGGED_IN_SALT',   'Z$u57JmF[dLh+ wm>7PcF<<%+jp])2eoUgdkdtg>pCSBBHg}_gorK-0ghLH@R:Ys' );
define( 'NONCE_SALT',       'E:Hk%D38F1X!3-+i$,p$/JEz}A45XO!lM69)!!yBVD{-v3cRom7LYnMXiNi4627T' );

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
