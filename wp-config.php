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
define('DB_NAME', 'wp_miamitemple');

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
define('AUTH_KEY',         '~qX-amGuwCak;{N?`ssegc9?4NF-`9?,A]V5gjrK+dZ-<3(1BZ(l2ne{} (ODQ44');
define('SECURE_AUTH_KEY',  ';^3Gs1%jmb#2!v,^-mm|I$vg*Yc+XJ`G6C_~!,_n:f#jry72l+7k,t@S$xvlCL~~');
define('LOGGED_IN_KEY',    'i!P$VCt6X5xR8od9-*qJqTBgZ@x}^d},/[%d}[]+hLii]0;),!{$#pO5rK|YbiP0');
define('NONCE_KEY',        '3/MCy7<~U/Or#H)(~v!wTl?<3|6p1_gH#E <+Stb%fYA9xbs<%)i|~C-^+N-JP{=');
define('AUTH_SALT',        '^J]+ERI~;oI3%@2kZ`sLdet4]C{aH|L!I@<SEvc6}k^J&umG=xnY|{A2qm%;H%DI');
define('SECURE_AUTH_SALT', '[cAXQXEx=G_|0N|S^8]y(S;<Gynjgb+-A_-D%,7B XaU22v_]WS+}/wU[]4mo]34');
define('LOGGED_IN_SALT',   '3CL[Gfq^2]$d~zxJsIA!a`H&cdU--`.TMW{}|x+A;<xVFZHZu3/Me9R=yvwptq8o');
define('NONCE_SALT',       'R=f87U%qV+ms?O}M<|tqtwG+pTzIT*Y%DGHB0f b W;|??7#T^{Pzwq?MS0$n=VG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mi_template_';

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
