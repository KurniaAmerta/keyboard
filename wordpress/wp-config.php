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
define( 'DB_NAME', 'keyboard' );

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
define( 'AUTH_KEY',         'rkdkz.~_?^<7,tt.ZFk`rZ?L$RjPcHcE6*THS]R& O3BC`c4Bb[)VGh4jT4L/e}M' );
define( 'SECURE_AUTH_KEY',  ')ojdRY|sArM[6zb[H*i7g=5C}~Uq,4N[=.)U?B}Xf-[AvO8]L+eJg37;^SSbI`~C' );
define( 'LOGGED_IN_KEY',    'x910+mj9g`^picI`1NeQ}?9W!7+D!wp$EL$OZ,-aZq4@i4KKkYPPay.|PIIPma>I' );
define( 'NONCE_KEY',        'SWFw!FLmcjYk<Skq;oH,}qViN!QO}v}N!3S3yae:/a..z+H?aW4NxKV;IPL+y;UG' );
define( 'AUTH_SALT',        'LqWJSlLrb3Pdc<V#%a-b:mIx_1gDa:a{wJHasHNrf+<8#CUXAO}7ygA_]:Z:xrVZ' );
define( 'SECURE_AUTH_SALT', 'ecI^Da3sG0fRR;q6_|J+wcgk/7VeslD@PPB;-:t0&0!)BwkVBxWqo[_DV)3&oP8:' );
define( 'LOGGED_IN_SALT',   'jY~P(-7MNa56Y(k(<>ue4=U*iHQWvK0:RH0.0> vAzbBzoVrTxD[08.,]K1EYkLl' );
define( 'NONCE_SALT',       'THc492J8m}d%U>H~_|w8Nz2|;W*x<Fy]/_Y7GDNgs3y6MdV}I(~5G0; FcL|ETrO' );

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
