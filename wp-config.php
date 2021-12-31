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

if (strstr($_SERVER['SERVER_NAME'], 'garriessandbox.local')) {
	/** The name of the database for WordPress */
	define('DB_NAME', 'local');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'u663098933_FCrkk');
	define('DB_USER', 'u663098933_DB5yy');
	define('DB_PASSWORD', 'Spashley213!!');
	define('DB_HOST', 'localhost');
}

/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D8ob7s2Nt48PLhTrFMRYMR9YQuj/fQRqjeMn11wREfM5gIhhecwiCFQvY/cTJiUAI7OMP6qNHnASfnT/CvB1pA==');
define('SECURE_AUTH_KEY',  'lGDF9SAjk4BGgvE//tu4ltyf+NrIyzq5y+eVrOA3Xmh97ksc5KQdi1jxSJC9/DG5mLzF2bqQKqnwGoNfJLFO4g==');
define('LOGGED_IN_KEY',    'coYrQFoDLWxQ7CJqYLzyuPSI3F/h3u3xs1XhkSzfU9ru50Dwj6B5bGnzqV6RMgA7EUMn/4XfdmNd3c1qvIG7+A==');
define('NONCE_KEY',        'wl+Fwa6ej/9M5iakvybO83lk6XlB86A7i9vj2n1kbMpWj7RtcRp0hFBXdR9iMSf2LAcNUH+JB1btK2GC4YWLww==');
define('AUTH_SALT',        'FVn0bzbVPDSwnnk3Mfz4RWGzzMG4ta2H78QE2xQjgUxeA2l+dtSMAc8mfdZCQMd3K8rFew43KsD9ssGZ2giBtQ==');
define('SECURE_AUTH_SALT', 'tPiXowrjd5BwxCDWOwm3SPvm92pEOCm26x0zhD+nABEYo/nJxYzlbrsbgNwebMYhWu7omrFu1DMzJ0weRvElhw==');
define('LOGGED_IN_SALT',   'FhgKjX3LedxGxnMMaaUz23zrKq6u2kHWXrJt3owuIFM6d1SMJq+vMkeLxCzkK3OUQYT7lvaZBe62DyVhq2fh3w==');
define('NONCE_SALT',       '61+TrNjlYUDBVYvVIc6c2miuJrGhFJnAdoKJs9rJ4L/IJqYkm06JXWYHGLuEuShgG0wfAzgWS2hvc2aiiugCRA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
