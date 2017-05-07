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
define('DB_NAME', 'celine-portfolio-db');

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
define('AUTH_KEY',         'pXX-4}_#H)/hbK! a`U5ONP@oMxx0#3J5bX|Q%luuB[v{&F`D:w6@1cG>Xi7lf3,');
define('SECURE_AUTH_KEY',  'Fz$KCl<~hm:?BgAV{C)CNv.xx85bMOIS8mh#49WhZ)w|Iw!Mrg@!N5WZ#-6L(%:}');
define('LOGGED_IN_KEY',    'h}qyF3BLa)QyIjJMF9 !yW}!-PPEg#>`T754/U0&].Ax m^9o?l lgA)8!+qti!<');
define('NONCE_KEY',        'p#hY1%*Ny1/$u@FN%lsB2mL6n +0x.,?+[yoSIzMHK(=_rnDws@:iq=u6UvXWq-2');
define('AUTH_SALT',        '+CB=$>@)da1bM%VxB/v)uPPm{h>F:4TM{-bc$^8_gC2D0*(r$ynEs6ARms8863<$');
define('SECURE_AUTH_SALT', ';C}FkcDy?=eN5PiVWZG`]`HwYy|Of|h;ub6h]&gb5.+|(066^ep1W,)OhV{Eb[hh');
define('LOGGED_IN_SALT',   'VF;I7)7s$NzN26jD(SiU]]l:~vGMZUf_DZfV+_=z9h^|m?Y, aJva5%XD>JP=]FN');
define('NONCE_SALT',       'U=vLDrd-[_I`@q8P DiUDGOR@FYB%Mthi3|+Bj092Ufyxx}F&Wcqq|~b:+>26f&~');

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
