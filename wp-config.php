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
define('DB_NAME', 'orangeboxknowledge');

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
define('AUTH_KEY',         'H_R>/75zypL(LxWgDcnFz.B.ds{mP;6T>F+IuYgD4sHX+^R=vV%~=B|)?R1c}pJ]');
define('SECURE_AUTH_KEY',  'ZcM /P2JWCivL.4)z}8,Z-*J<s:^rDWXXjhe3SD}yq2Cb}z&,rSWJ`J0flN%uV+S');
define('LOGGED_IN_KEY',    'kY/}FM#3tt:$3VAF3VNxc:?m^M)5;-{PLZ9E^@Nc:h6q3Yy|Hn|H_L{reLc!.l57');
define('NONCE_KEY',        ',j&*G-kZ1;YDZE!?sxTw23FXENJ&NML:E4|c#,Z$O/i6zLX85adLDpqGMhtb@72)');
define('AUTH_SALT',        'c]2V(?,tfqgv^G@+Oj_I}YJx[frGEjp7w>TGJ,3EJTjl(~&B5$=NcP0 lRfi2rY~');
define('SECURE_AUTH_SALT', '`k.wF0f!,;t{R5fGVy3tNd e>|~x`j(lqZo&_N1,@SG828`iIuM0]mYb]3[xqV9S');
define('LOGGED_IN_SALT',   'li6yntX3{HlO#_8=buR;6vd qkJy_Z?aQ]!XTfctRdnBvTR3B!;_@.1>qV_9})}_');
define('NONCE_SALT',       '?4ss=yRL}G~BxTd WW0k OvW%7U116~wXXLAe1+)Yr{w|Lltu[1}EJgFI5jv =LK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'obk_';

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
