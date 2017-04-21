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
define('DB_NAME', 'radiancedb');

/** MySQL database username */
define('DB_USER', 'radiancedb');

/** MySQL database password */
define('DB_PASSWORD', 'Lq5zo2O~p9!9');

/** MySQL hostname */
define('DB_HOST', 'mysql4.gear.host');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A:9V$5gQ[yfvY4?[nI{R5%yp6DwT~2NaX=IJa^}8/ak{?T[LqIs|^D;5=;+M0t*!');
define('SECURE_AUTH_KEY',  'u3mz<Ydfj7?Z|#PX)oF gh_?zlwwPc(EU-A6JlS-kp8#G4&E~U qFkpYw{|Og&WY');
define('LOGGED_IN_KEY',    '_xd7eoC[/(etOa( 6QsA+It8|h=-F[L!r7^tL!I18-_/3G?s/#yf{6bT1iyG$&L@');
define('NONCE_KEY',        '}m31H*sW}.Ae,iukg2v]ug<ypN-X :H?b,CKK>Xbc4CCdGjbR5(gg*LQtq_X;[*8');
define('AUTH_SALT',        'W+*Gb&`=e=DW/Ea;oPr,;^Iyg@5HbRoMNj,yM0lFPe-%q7?_q3|aC^>}0E<NvRi?');
define('SECURE_AUTH_SALT', '*5jzJEfI?.<TU(3xQhtuBK|nSdw]&wzk5{<&NDAbpqOdJcjQJj~K1d~vVvim?Yo/');
define('LOGGED_IN_SALT',   'Vls$]0_/8MNZ}w-.5viXkY5bhXXjD(v7Jt-DrX3s{Yea($^(8Mc$IkYIU;f}eOC*');
define('NONCE_SALT',       'BpO@tZ>NT$z+h0o]ZV)p^{Vbk?jfKL<c[Kzy{q)+DVL]nd^=7O/_#/0L&BLDA)FS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
