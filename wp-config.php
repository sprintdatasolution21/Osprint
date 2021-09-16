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
define( 'DB_NAME', 'OSprint' );

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
define( 'AUTH_KEY',         '4%^;pdIii<sEty>m+Uzn1pT5i]<I_,QrcFXp%_6,stLQp]X0E4=J}E,,qt/,{6Qs' );
define( 'SECURE_AUTH_KEY',  'Q!5?UlZz?/GWRNeBA3$6f~03DzL6b;%Q)W]r;xym(FzRT9uz v~+}{pXao1CvtOz' );
define( 'LOGGED_IN_KEY',    'Y;n.`c8-%YA[RVUWBgO8x9D*xl7Q0@m}mt5Js<P[zEf_m$^:RP#*D:7BEBZaiUdk' );
define( 'NONCE_KEY',        'w$0E)=<s@W*>S,[+6_bGNjZQAX4B}H=g;6W}WD7aW-MFYc!ONOnc,6Y<&GYXi[GL' );
define( 'AUTH_SALT',        'godAe[RqGAR y@yvpI-C|KTd!RDGHb.cU&x{qO6 A]k4iE=9uZsMrD^uw-pRt(:#' );
define( 'SECURE_AUTH_SALT', ' ob!LtOL;fPg(#T)4AVoLy9M%^jA!._0[p-TU&ywweuxaNd<8dPNB_eB<o40}KQw' );
define( 'LOGGED_IN_SALT',   '*f(hk8,ls>(pYS;NA6f(2}qrigOs7#0bTA3Abq<<8zuUGp15st|LS4]n2Abb^l.)' );
define( 'NONCE_SALT',       'jO])K TYkyTPw^f~B)1iP/:y8X +0;/M?7!nI(3y+`gMCJ]gwXh~8GUcc_{F)VS]' );

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
