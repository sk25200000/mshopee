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
define( 'DB_NAME', 'mshopee' );

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
define( 'AUTH_KEY',         '&o6*z7-%sTct9lY=}_kQGY&Ade&|0;sjw8L?zLQK;*I6`#78{Q9WHWdTnHo9aN5Y' );
define( 'SECURE_AUTH_KEY',  'O^4@yH88s@2/RFhd{0bL8</-Qa2T6-n$2`LIJ|P>0AzypsvY$4j4in+yG9Ogh#e2' );
define( 'LOGGED_IN_KEY',    'Z+N@s}/^<,q%jh1_8`#3d(SKeLx)F4K15^YhU#;i`%;=w?5.M$-Y]Kv*^!(j]53l' );
define( 'NONCE_KEY',        'r=x_d$zt_?S*YAnV91H<N?&m,I6Vv;`[9g6b}F.M9,^aOr$dI*5i?I9#SqxM?(Eh' );
define( 'AUTH_SALT',        '_dCSPvV}7vJ?P+,D(Qk?$V}+Ed:q=s6.78?sopck<*/O/BB:{%6dn;.cCZ{L;JvQ' );
define( 'SECURE_AUTH_SALT', 'MKZN9(6dk_o??6WEt[6kxD)@h@_b6Jg@]~nmZ(SePLys,(:~3w;Jh/v79YgMNGJx' );
define( 'LOGGED_IN_SALT',   'WQhYE$Otr %i-[U5FFb4eU3|}8k( @)m49C9_<NlAy)k~4$3 @t_E?@Zt( _0aMH' );
define( 'NONCE_SALT',       'YtG4`/bR;8roe=6O6K x2=9Q6K-[U :N^@qZQObcWr5E@_HB01h)4?o<BH7PFuu%' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
