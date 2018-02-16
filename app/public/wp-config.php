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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'fLPB0MxLRLY1d5/+nsn6LHsojVtetubGJHu2bjq7rU1siU/3jgFSo/WcJ89wE9LvLKA/rvQCftTWuFCqqXoiYg==');
define('SECURE_AUTH_KEY',  'n6oos840RsrmrN624h/ZMi60mZyn+bFtQpkg+9u2KXjg96pvTUr97bAp41va6k/h2pDub6ZgSOvMTsHiryhY7Q==');
define('LOGGED_IN_KEY',    'Oca6Ip4r1D7OvHZYJbB3gBTomJK516mSDtCEnell9xBaCfhzzW3nBNVgAPjuk5GsqZjtA4oyvl7B0JzFdJpSRw==');
define('NONCE_KEY',        'fu+nYbQoIzxKyQ55NLLjgOel27T9fEjkOmJvqsyslLzYWqpS1tjFELQVbSXeGSJea1iycHH3mhca/a+3iY0LQg==');
define('AUTH_SALT',        'rr0+nkTfrUwggTewSWMXPRo9qlhzmeIGB1778unS1jN6/k/+w+bewMUDd9ayT1d8q2Zx14xLdeX5BaK+9xPT7A==');
define('SECURE_AUTH_SALT', '8QQSthCxKi5d/9zxTxgTdPhrcdwgIdNaJ/wXBR23QR4N6rKRL//6ep7w2AUSYfvb03zz+99CV2L5gE+4NlM96w==');
define('LOGGED_IN_SALT',   'O/pnfPAuMmyFpucLLD0abS5/ZqWekaWq3Cnt+gNjNxfOejvlhyLRjt7G1Bf9DuI6Ghli6eryH6dbFqUZ5dzcYQ==');
define('NONCE_SALT',       'hcpzPdoFqfsO2HhFkYVHbS9SCqjDtneniAAL2CUK5sYHlAgHAFM2SvLwsSAwV147Y6zZ+w+khpzUksxumxo94g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
