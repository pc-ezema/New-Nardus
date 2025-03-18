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
define( 'DB_NAME', 'nardusng_wp546' );

/** MySQL database username */
define( 'DB_USER', 'nardusng_wp546' );

/** MySQL database password */
define( 'DB_PASSWORD', '(h0(2JS1pZ' );

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
define( 'AUTH_KEY',         '5maselinbnushwevuxzlaukkwgwb7nxgysjlwcyqiiert1miauibuqgz4rmo1rog' );
define( 'SECURE_AUTH_KEY',  'hztoxkyawofnymjodppdjz9heiedftooyvvl8axmzjtmnafqhsquhzy4df2qogul' );
define( 'LOGGED_IN_KEY',    'jvc0uyd5pd0riqs4qm45alv9aouqoha5i4fr1zaaokpwmz1qf32pd7iydbqucafr' );
define( 'NONCE_KEY',        'vzurkmb3lwgzlspg0iaxw9yc53ykeo1trs5lozbdymybvsqcup1xcjnp6lerkzth' );
define( 'AUTH_SALT',        'uuc4f8tpdlyd9xdvldjimaezx5ld7frmjpoxfo7qflilyr5vtwtrhrxrbdxafc6e' );
define( 'SECURE_AUTH_SALT', 'zno5nyzlfshy0vozh7rxvux1rebz7lt5sdwzxqeyftjsxkr4rn6fnuvejiis2doi' );
define( 'LOGGED_IN_SALT',   '77ioywlrhbzuffwjunrdtdemnpmj9zxyurezxci4l8knckjpv9ei8iobpopafxkk' );
define( 'NONCE_SALT',       'fadlb6nsuuu4sq9vawkx9wirb8s59yggf1yi6x9prwamvezanxjgyxjuiu9lsl1y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wph2_';

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

@ini_set('upload_max_size' , '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
