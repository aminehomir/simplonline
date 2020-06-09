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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|o!)LtDD9LhTV<*N[Mgs_0WOEjpGoYh= ?/1O$*)?*]%N2aZqdc2]8)Yy#-vbsMg' );
define( 'SECURE_AUTH_KEY',  'W4]g6!tl3 Pho=.15y*miAWG*BO9#,=GdZp?T0FSVnijr|E&O_}6-;*1) &sW>_1' );
define( 'LOGGED_IN_KEY',    'kCqQ5,+]NCU0lW*-<F=d:ZxPJYg&;nItRS#DpMU)d<VPdu2T|bM7xg_g0;MLjdo#' );
define( 'NONCE_KEY',        'Tg1~TG-!7yssI%GeTa)~`:Y4!i$7tV6&Jla/6vl0+w>nz(lqYnG`9O}-eJ3Lh~J9' );
define( 'AUTH_SALT',        '?(=4&Y#$!6M|3N&jmh|;KRL/@YV>n7~m~<i!_@<l.=|+r[T!Ccc^ NlnMvlD1S.,' );
define( 'SECURE_AUTH_SALT', 'S>B{+4e.@0_RkqPBbL~pjN^pg (lk-?8b=33%_@Z?0%WbC190BsdJNlq+v{$0[V0' );
define( 'LOGGED_IN_SALT',   '-p+EbYsK!;#>{3]!2.Yf)6o|fs0<]|yo`nW-?hmdg`BAg:yn(]r]1i%h5Z=iS]iI' );
define( 'NONCE_SALT',       'OF.(/EtIU`nb*~m}{T~.:D Z}<=!POF~.5rV>V/4zKW[C|N,O#(p :21MOQU,}#c' );

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
define('WP_MEMORY_LIMIT','256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
