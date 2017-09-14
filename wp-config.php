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
define('DB_NAME', 'hu_foundation');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '>Q%~K$uI3m,~8_R>Nf%N7?Z+I2*N6.,y0,O8uKx5h)yyj6T[@U@H|GL2{~ }8U]g');
define('SECURE_AUTH_KEY',  'l{h;d=;UAgQH`1[0Mvf1!o<E[pbo)6p)HraFO?b9-}*9$$t]w-|QyZHh8}iEJILe');
define('LOGGED_IN_KEY',    '*.m:oe<8*d=&WY/#Pa$o}.DHFRY4jP^`wfc~G;D: gO5Wjf;]_q=oZ8Xj5==MLU&');
define('NONCE_KEY',        'S($8q&W4i 60$+L1CpH4/,yaa)v!L;_k9;H3TiGE$7*54|V7co4pa1R fqHzMR?K');
define('AUTH_SALT',        'yF`RQjz}!x|+*+Ftxa7HsQDe9HJ*6.D84.I`ui0,fa1;(zMDeiR#l:$B$0!Ilsj6');
define('SECURE_AUTH_SALT', 'GR$,o0xUh*CDp%]/^d{[>wP+r~K=5)j]e3sX:3gD}<dk?6/XDk&oKuGRpcV$$(ct');
define('LOGGED_IN_SALT',   '~,$n__{w=X/>;uiIY}wuB@:kA&+/0^< kQz`6AlYul7$1WDpE7nJ4UD(RH%^4=;f');
define('NONCE_SALT',       'ak*/U]GA*c0u+/fr7cg30K<>V Rfb`Y/T&fIE!Lk.<wr^^YYq:<kIgQ*)C1T8xrO');

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
