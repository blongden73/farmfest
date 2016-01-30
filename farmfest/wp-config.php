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
define('DB_NAME', 'ff');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '?$n !R#M!g#X1]T;q8evD-CZ@}Pp*0I7SpxZc,Xnk9z)s>$*fju-(XNvc<+0)`Rj');
define('SECURE_AUTH_KEY',  'f^#VgO&x[]5}{N8SV!A<V6a2g+i8Gi3tQk+omO$!d7{&QK{+7k0Z|`e|bfeWbu];');
define('LOGGED_IN_KEY',    '~~RzcLK:Xf-&~mEl6o-~2$G[R%[N@Es}qoP gsJO%>rw*;=4D8TIP|;6BmSHO1HH');
define('NONCE_KEY',        'V9l+3@X~&Du-%;C5b($G~`y0:0!0/^`7HdlSZQr{[O.67Pcsb|I_le4x?H_-n#p>');
define('AUTH_SALT',        'Xl&<M;AQtaC-|:$g7PSon1c6U=&nD+&acNRr-Ffzl~~lhS-8z&V+qksnrs]?&Ub<');
define('SECURE_AUTH_SALT', 'r+B5DY+;XXCZrcJE@~l;8L%|mI{/Qh;F;-csQ*L!$TL /x!(IQ*j|+=|s^!l</v@');
define('LOGGED_IN_SALT',   ']Wb<RC./}X|p!|y*+re]pzh)2P{V&~t=cptHpwK-YvoVw:Yxx2Pf(jiORxSCuPbD');
define('NONCE_SALT',       'CUy~m,F;Zm>/vK+p:vyzu+#*P+]56)(DGT,YGh|Xo0v,5myJ6V;5zhz9NpK+7R~5');

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
