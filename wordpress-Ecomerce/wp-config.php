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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'Nk5&$5Y?7m-Nyud}V|)C%q(|Re5cIua)Kc&ch4-V=z^Pq!x+{?44Q-#n4@]s0g*?' );
define( 'SECURE_AUTH_KEY',  'rD.DfBZhmow(R;>gD]S*TLBvlKs0nhLH0|OBznDz9up=-EZI2g<)s?|coRM,q*ra' );
define( 'LOGGED_IN_KEY',    ',1i7[KM](W*|7Y]uxokpyOS:Gn,-hb,V[S<MDldzl]aSQB^AmM;/Ms_s$bT_$/)Q' );
define( 'NONCE_KEY',        'de6zirtoR:*};}+,lg6]$>qiNK68~b-4hYNrP_Rh+.%MkI?HMJ$=`|@q*gr>s^^n' );
define( 'AUTH_SALT',        '@XyO b}Cvyp{x|ZAUu3tIYO3Atj:KM)YYGDAfenjGLR8R8wC|pv!W=N>,TC/OA|y' );
define( 'SECURE_AUTH_SALT', 'gTOh=;u1GKfh5?#(HDqS/UPvthn2P#r3tz(AP,4L_~n:CvVd}Hf0@wl+ckn}%+Ji' );
define( 'LOGGED_IN_SALT',   'y/Hm+WK9Mpm!D6.pFLmsZI*-x#U8OwYH>)02;x6OzB!7<vvt#j[*O;,e:IHmOjSw' );
define( 'NONCE_SALT',       '5C<`e. poanuWn!y)tq]*3xAD8G*@awMv)&9Ays9+M414JX18Ms[ha-C59W9Z!7<' );

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
