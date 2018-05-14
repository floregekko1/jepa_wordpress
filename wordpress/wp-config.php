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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'fogap27');

/** MySQL database password */
define('DB_PASSWORD', 'Jepa2018@');

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
define('AUTH_KEY',         'dY{}?o%RfL3?D=K]E82+*l2{`C2~8-2#w+_E*=`rH`8M*)*sz_<U|h#[,dS2/HCh');
define('SECURE_AUTH_KEY',  '}($ce/I+(#KT_2~,EWLc>@xDHT[]:p|u?P qjJF7PfBPdZxpnQKiP6PXH_R;rvK}');
define('LOGGED_IN_KEY',    '1g[<<~|?Hd %k5]h3^bt?(|;_Extm?c=Fpc~i=[W{y3M{T#A-y=N><RW,iNMKCOW');
define('NONCE_KEY',        'f4[%_IjL4k:r2~k,Jr1K&]pSjlSn@eQqnJs6(c3{gfZ>_X1(gke}217!H 0:Gv8h');
define('AUTH_SALT',        'b?$$O~fk*mrllfKj!zV4}HtV)V=a>p~o{CIX@PQs8Bsn@}ud.js WSpjwPxZ7bvV');
define('SECURE_AUTH_SALT', '|oc~I#{OVj`X`j%zBC9*O5Aca(T!(4Y6OD!W<y+yX63c`JoEcQ4%,9js$OQUtYl,');
define('LOGGED_IN_SALT',   'Wl@e:6g|.z1ZJZ<3Tdm?+B50_k*{[1FF}Y1/m$cYcPHob>hJ/{VFPwY!hW3AH)<K');
define('NONCE_SALT',       't=Jj5!CZ1~h6tUkmsu:8|}[2,riOS287GugRtG59:<a5qt9H*KQ#$^rg &~WbYP#');

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
