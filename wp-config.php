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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nombredetubd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1010Will*_' );

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
define( 'AUTH_KEY',         'CTKx?%0JoJfoP,Iy^hlE&5TWga|0PK(5j&lQ`&72WBe4H-r!u0RjjL2P/MrE5!lJ' );
define( 'SECURE_AUTH_KEY',  'H.uw7a^QLCw<8M[xRA:>./q4kppUvYOv-KROMPZ6BMKtOe//BC9r:9r![8zd(z@z' );
define( 'LOGGED_IN_KEY',    ' Fu}eY.~@!Yly36]zML8Uj#%D)U?As78|GNfIH)e]E+^ouuvml.QGDGnx~` J~1&' );
define( 'NONCE_KEY',        ',!YZrG@8SZ&5DYCOy4lO+?iS3L}G+(McD&^nBjxD)ODL-9YBF^!o0]AMb!kImC81' );
define( 'AUTH_SALT',        'k>97nw`ctFtPCwGs0DL<?i>&bYa ne^#Ug|jKN}rPam2vpW=}8^$K$#pgW!U-Xfu' );
define( 'SECURE_AUTH_SALT', '1 {6$t7|HH{&JsO,ejX]uS%M>;0,)TJ%:v<4^~#,Sm.9kzQdk4-^n;[W_J*dY8g{' );
define( 'LOGGED_IN_SALT',   '(}hc$V`*r 01ZKx4@@]vhkoDf8wy[@zh@=SIj(uthzIK)^+hYe!a&Y#g/TGbggNg' );
define( 'NONCE_SALT',       'p=QwMQ]S!bv5nJ+i0F&g3&0A1vo$)a[.3SLA|SkQrk^mA)gZF)/#!8SZP$^B:?ho' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
