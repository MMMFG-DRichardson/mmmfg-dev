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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'xY]ad>C]Ic9_BR1jQCFfXnNAtp2}`Vw!E;?7hPa8$ErQ.>G`Y0}W9) [r8+TX`kx');
define('SECURE_AUTH_KEY',  'dUI47a9mI:IU?}N%+zH?,/PhFb!Jp]&=_.L!%X!qf*X)!i[<]%Ojqf%$/I>%R}Mj');
define('LOGGED_IN_KEY',    'Eg%2Vo;(-mX?&TSCD2qt`[Q9&g+>5~F~B18Dt#z<Fx(7i~n}bjSHHzi&RHm`AIq;');
define('NONCE_KEY',        'x-mLTccA_y[=9PN]>ss~ct.!~[L[Lbo3T-;rQ)^h`GCAA/~N+8pL^RO5?f7b:Esk');
define('AUTH_SALT',        '&~(47~-&tI!8n&;xV^eafQl3LU~B4u=x_!zS<jYDdEO@[s N.B3`]W0#D.~7yE2)');
define('SECURE_AUTH_SALT', 'KLiv!5*%F++s=0h_M{Y8@+uD7J%=$G)CF[`,;nK/.Oi$G~FifI)0ClNLo|opd_PL');
define('LOGGED_IN_SALT',   '7!4T}zcIzU.aqODahbMc?-W!RqkE$l(M:s2u}n<P(NWpee)yQFlj/Q$bfW9 0n_:');
define('NONCE_SALT',       'q(DL{*/A_Pnrd-Zs^Rts)A>N}ql#Q3op3`PJxWrC O_X}Y%~&`gOT{zN|:J$7Ai@');

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
