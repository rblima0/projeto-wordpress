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
define('DB_NAME', 'wp_projeto');

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
define('AUTH_KEY',         'xe4,m6Q(N9(P /lWZ1Y@E_VQ>`HZF|C80z18 0l[/qir!>FM6pnp3(VmP3r;h71H');
define('SECURE_AUTH_KEY',  'u4j[8:4/zEs&QAf*ObPbdh :X3~a`2eF,6s5~o {2j-}XKCfqMDW4>g-VEkL/C(G');
define('LOGGED_IN_KEY',    ',$R,y:4LSR/4,}vfg~mcJ8{h,j[FWu?e3R}vrQQrfVH0rDyvP5p xL|&D/5vXhlw');
define('NONCE_KEY',        '3N#8/: m=*JT_p}QrW#Z|jYE<NHujiPTo1R{+*W%nO)ys5mw Uw@~jrN*6w1R`;G');
define('AUTH_SALT',        'y0ihU6&vqUOWl(w!%p/V<Y!K`x^6:7/wORbJFym6I^xclIlQ]7->$+OJl=/$J=H~');
define('SECURE_AUTH_SALT', ':Q8&4Q9pV]qS{:dq<Wc/szG}bqkn8ws36K:K8aaJ?%)Pwl<J]elnnI[>xKQlmdzt');
define('LOGGED_IN_SALT',   'cu/+o:#V3:GTu.ir(qXLk)AH734Uw#@<75xv[n*!Axl=[+`*V,R.SJHtxY@R~$ZM');
define('NONCE_SALT',       '`yR{Ef.)53pKpyUU^}$>*>6s$R^+OUj?xsc*1>k[7,sot|~Y.:N#+kO+0skHpw}M');

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
