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
define( 'DB_NAME', 'portfolio-wp' );

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

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '4t6TPYtIi0MH6uKKbJqZjMDgYDyAdj8LqJrwWH837dow0tkiUPDvm8FnvkNR6veF' );
define( 'SECURE_AUTH_KEY',  'NjALNnKd5fFJ4yuWEaFE8GmUwCpybpftZzIYiBr9yBH4prFduhjrdtGeqsasHOWD' );
define( 'LOGGED_IN_KEY',    'c1kRnFLpg0ecxcFg09PfkYB9d7F0ah4c25KJiaDTY4ij6ZnPLnR03Q8aDPJnL0pH' );
define( 'NONCE_KEY',        'pJ2xz6Il97q7pwqQXEFCD3jeVLggqVQzzEzoW7GWnnL9gXOIpnw1o3qZmBzyIay1' );
define( 'AUTH_SALT',        'Qg7Iy2ALnEnaFoQNU2oAZc0jMojrQ1i21DOGlB5QNbRYlgosCjIb8MyhPpKfteoH' );
define( 'SECURE_AUTH_SALT', 'o8ya9xO1POTD19bfF2j3URlPkyuV6Trn7zR2kRedeq467EuFzFvhvXrZgWp8YcNT' );
define( 'LOGGED_IN_SALT',   '5inTiFp6vCZsqKsbeEsXq2TKwgMJ0AeCRqJqUTa5G7ltx65lhpSgxA58Gcx9d4JC' );
define( 'NONCE_SALT',       'YgA8giUEy1QtfTnuX8ttYizGTVxAnHIXuH3sfusL9ggSSRNSy6OzWKxJOu2HgYnJ' );

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
