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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define('AUTH_KEY',         'rPl7xP/O8Z7p1Vw68Q4HC1MrpLtpt79PgBd60U5fXdC0YTQ6+NXHunND6Ax8qT8SWNM306k6OmU+fk30MWJxxA==');
define('SECURE_AUTH_KEY',  'ONbQFZHEOwkvEdl4xZZxSYZeteBISUDRVh3XQ7s/EXLG8b3GBrPDh9PUzeHxUnMbaWQcXsNZwrSpuB5e/WT2AQ==');
define('LOGGED_IN_KEY',    '9/09zJabTV4Ua0kP6VOwd4nX/WwGgHwdmT0gXDqUA5kEM0J0aWU1hSWk2VlNsCAE02r5foSeTMwl0/7Q3Nw8/Q==');
define('NONCE_KEY',        'TblpUNwsejz+tNJQjSDkJHGVAWsxnHK2lEsJ65/bgMn1CTMQreyLFUewAfGwW5p9YruDDQHMz9VhY2ul8e8JKw==');
define('AUTH_SALT',        '5EQdeazSdqq6rLIXzUreNepfJzSm0vslT8iLuumUVX+4IUWh4URbY0Ox4dx2wNHlmHw1IZfM6KO0Sd/9Zvao3g==');
define('SECURE_AUTH_SALT', 'Wv7IbptT7TNXJU7SprEb/4wjwIlu111k0SgrZzYxkOinpvhc7h+KNMdybsPO0R0rviCJAECVSvAm085TwWQuGw==');
define('LOGGED_IN_SALT',   'SBvQLf/aSp9ZBdHakcgqaZrRlKyyU9J4zHeAhQ9r8kLSMxPoGzZCOxd9DEZ+2mH/fTOrJvA6UQYelqeD/hqP+g==');
define('NONCE_SALT',       'gqX37c6O1jTA14tJywAt7AtZS20Rpr6sEFzMXefoetNPQAueGphPdpjjPWPZp6qCEy6+RUjgqKHNdcLbjo7cRQ==');

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
