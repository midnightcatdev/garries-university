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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uWGuso8h7AFgPzfjLe2juE2Tgus8FhHHWs7EMOaw875eNNbAt6A/EmsE93j17JTvVSgIWcGKo0LlZUJEMpbtvg==');
define('SECURE_AUTH_KEY',  'fX2y8j4TCDmHGM/bMaSflwFpZBysddQ1Jaw3vKquPBp1IlxHhuIwrBLwo8KLwqu/vmCC1SMb90HyllUEF6UX4A==');
define('LOGGED_IN_KEY',    '844t04a4g6WXtuqR6SKQnkWbJ0JfSQ6UpZEWgkkQmDd/Yv1w3xGCN4SLMvHk9WvpihH+OjnWQ0KNk8U92sjPwg==');
define('NONCE_KEY',        'd2Dplftanvn7SLYvN91guWw6fJeOHWFADFb8SpkOd5tg49zbi6s5WeKw+tvzpfUjaHDHf6nO+4sbdet+q/Ei2g==');
define('AUTH_SALT',        '+tQB9QWl5ew+GOjL0Tz7tv9gbgP0+SWsY/gG/zn6U6eMaH6iB2RnvfKXu/TMQN69qsSgvLO1WcWPY7oNjWBZMw==');
define('SECURE_AUTH_SALT', 'EvPPiXYm/wpcswBJASTiWVbhK84sRxuutusz2r2DKWrKZnsh3lG9yDWlPN8dW12FoiCx4oNuO+9gRpC3i4O7Lg==');
define('LOGGED_IN_SALT',   'oi9OdU/h9qtMrrYyoOI54lbbbUt1nFzboP7kFWTXnAUggSxm6+OZmqhUuZrFTY/YweVjxgqgB1eQHUwsmQqKWg==');
define('NONCE_SALT',       'Fvvpwdr+jiNs6dGCCr0ntGVzUuvES+zScNOiCtGwRGUSSw6j1Qs0PwHnWhUz3x0Cmyalm9hc5f+zCkOWcoJuXg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
