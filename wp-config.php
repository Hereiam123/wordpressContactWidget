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
define('DB_NAME', 'mytalk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '[)h}@#/*|f9@:%v^y9:i5n@.^)e]3`!s*b!5k==p,!=}<h3v1$zoq=joyt]p6:j8');
define('SECURE_AUTH_KEY',  '?j(wdo=fo:>#%wc[4gl, 4xu#sm7|y89un.2!9%;/kt* %pa]w9]<y<ke=c`)||5');
define('LOGGED_IN_KEY',    '(/2)m?<?`6f^5_.%]cqupy+]u>tv }+djq&9@br|zx`ed<gdp :2v}w5^xi9@s,s');
define('NONCE_KEY',        '*-[3{>/hnr78{|q&f]=vt=*)jr7k<9e5|x#kd_>(?xp9<`ufu+!{<t[u0{!;v;d;');
define('AUTH_SALT',        '-]v;vm-o,!v8ic3@k`@ 7zl$k3}y/j|e{^eb?,0qg]4*/!|?#:it&2|p{%/7:f}(');
define('SECURE_AUTH_SALT', 'nn@y::9<lr?e6$ym-j*.hby#0t42uj9!u|,[l^i4dt~@@8gpmfi8:l+|9;8t>5q&');
define('LOGGED_IN_SALT',   'f4{&}wue|891!g&at]ww%>-m{`33c|_]jfi53j{{(jq9f&swi2$djz7g?dtk(.jv');
define('NONCE_SALT',       '1`#1c<[6r}5- (=]rz*ja>{)kaik^ikhxr=e{mel>u68${~sm+{9mt~jmtzs|}^$');

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
