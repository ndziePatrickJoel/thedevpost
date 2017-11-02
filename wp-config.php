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
define('DB_NAME', 'thedevpost');

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
define('AUTH_KEY',         'wY-_%N2GD=)#}n@ R9XUV~|qy{.g}~c8O0}P13:<`{$/mwV>y!cO=QCd;.rX:G{Q');
define('SECURE_AUTH_KEY',  '}/I2#a%vDrzOy`,aP{kwI1L3uHs`]V@U5_NK.3vMwr&|.a$x &[gt-ht0N=>)#T1');
define('LOGGED_IN_KEY',    'so%{,cmU`K]s&u=56N}8ZXz.q8y120?:pnr+0=--qsfXK90iI2/Sf`t0k[6[qGtM');
define('NONCE_KEY',        'hW464V@@BH~2 |IP;TZX)C?VC:q3;~9FLU56ES,0U&/;Zs+,2Ncs0R*R!qFgbN+6');
define('AUTH_SALT',        '*[Si:unqJ8 $4wd2}842!X4s{Qfmh[J}e/8+bL!Z0qU} LIvB-dHU3:.i*3D0/VM');
define('SECURE_AUTH_SALT', 'RGfi`9Ne|,yJVWgFhuHa9;C(%{2R?y8+T_^E&2j*#4LjsX[{6eYzKjk:O?66X_B.');
define('LOGGED_IN_SALT',   'Upb@u9PwODor*zg9A8iK~B,z_@_TTVxNfjC5;3 pc_or-hkovi*).dJn8%~8vz``');
define('NONCE_SALT',       '.*dg+.^#!@f5sxet%>={wm#cINo=U4w?-$J*T|M}#OH9jeYF7}5?I(q7}M-LRG#!');

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
