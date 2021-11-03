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
define( 'DB_NAME', 'waqrhafe_wp606' );

/** MySQL database username */
define( 'DB_USER', 'waqrhafe_wp606' );

/** MySQL database password */
define( 'DB_PASSWORD', '3-(D2pjVS3' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'cjxifaifbytujxdyfzpgu2moicflp2uo1qnk6bss0zoz5ald675f6ribdazmiiiw' );
define( 'SECURE_AUTH_KEY',  'rkzvxgwsycp8fv4aenx9xtqih8vwuhqylzwtuea7yu46ipx4azqokymg1fo3rdqa' );
define( 'LOGGED_IN_KEY',    'xq50yrc7ticqzmeelvznjaeo9t6sjsv7fvaj04cteof0pragppqedz5g9lovvizl' );
define( 'NONCE_KEY',        'zpmrnst96wgj8hljupn8wt307gv9qywligxy8nvd6xfvv8jvo59bqgokohkkoerf' );
define( 'AUTH_SALT',        'clrqgeilh3dvuujpjtmd0hdrz1mu2ibmfyoton7c0uhnpulhyhgyoq7ulskaliac' );
define( 'SECURE_AUTH_SALT', 'dylqbvqrhuosfwsdko13vskigbemsq09mnkm6ek0s2iyzurold7dxerdmchqid13' );
define( 'LOGGED_IN_SALT',   'dsfwdvmvh563xekv77wkaeuxwzfxjmepjzqozhxk6ddlrj8ahar5g4dw4xw7qilf' );
define( 'NONCE_SALT',       'ypgsivetrujjow4lc2ghkdjpcrnvcfe4qxqw50bagvipbqacxmnow3r1utwy41s2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpu9_';

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
