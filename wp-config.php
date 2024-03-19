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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'roshankhapung' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'zkoihewhcwxh0nym3qg2jnyuikfdrmg1pbd4gyvpmjhxvpllcyippsanjss2fxyu' );
define( 'SECURE_AUTH_KEY',  'iknuzbp9welswqbspgfnrvziydccax6nkctrzfmhhsb0ea9v5pzni3zwgw5ms6pb' );
define( 'LOGGED_IN_KEY',    'otwiy3wk9jxmx32ov8haewm4z5z7sv8uwmzyhpjavcy8wzahrfxx0rhboh9y1nkt' );
define( 'NONCE_KEY',        'sr4poa5sbcjsflmdaeqwkxzcv5sgdezg0x0q0p5fkhegxwn0c9wpevwry69ocons' );
define( 'AUTH_SALT',        'doglltgkxuhzofzfag1gjkcu48ggycuslnarvinxwceik46paapv2ji1qxrvehud' );
define( 'SECURE_AUTH_SALT', 'lkzagnslvh70hq82stvnj3leqw0pxmxgqdw4aw7vz5yh24khrpnfacacurjx8g2n' );
define( 'LOGGED_IN_SALT',   'wr55xdrg0qgx9ptlxgtkwh8y0xupie9tsnjbvzh2utk3acjdhf0rnynukwgpbsu1' );
define( 'NONCE_SALT',       'iyhxen7kcxbrhlybz0zm5anfimlmhlqqwdiovhph49brgugtfxlkgdsssyz46tsp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuv_';

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
