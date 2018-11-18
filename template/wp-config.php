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
define('DB_NAME', 'adsk_wordpress');

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
define('AUTH_KEY',         '0JPG}:vDuL&HhA4=RYfK`1$Q0noRx7Hv@>8aPR,F30<cr F0J#It_Z!Z_&CH%WWW');
define('SECURE_AUTH_KEY',  '8vtq]hHz)8KYEqCegIVH`NPDgxnx CmE:a)yXqjBHJ|dOC;-zXm&@:.bf5v5_N9t');
define('LOGGED_IN_KEY',    'uO> aQ3!}&3WpNXC,k-DgZxiy:+1c0K$npAQOZX5EK[%_u6L-si)>yc7JWX*gl/v');
define('NONCE_KEY',        'T--LCrjOOVg$:juBFH6/eK$^O7O1P^cP{{YH}Ba~!~;l#o^a+K,;`XDTd$*hW :$');
define('AUTH_SALT',        '9YVT 282&_L.Ux6}:!lnxdZ;yx!1azJD[szs:YD96aHC$+5K+XkU2msu,?}&IkqE');
define('SECURE_AUTH_SALT', 'EBQyE6MbDc>,/JWN/]Kt`!wmXA%l+iJ*B8:=.ig$WQQGm5S&F}QeEKe-R/w5V-c:');
define('LOGGED_IN_SALT',   '$0UE-DGG5*^U>I8M6+a6yi!!ErY[4?*D~g[6JfX$/CN>OvQEu@$> _OD-J_dRKx&');
define('NONCE_SALT',       '21^ISkn_$}D0la!p5:bod#ZC2[83pE2>>:r5f/((c41@*>dRSeF,yc#$nClso:@~');

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
