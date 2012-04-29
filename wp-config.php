<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'igeekout-2012');

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
define('AUTH_KEY',         '+Jo:;EKjzHTmgq-FRKxoOaS$<)= %T8^V.;:7G((S TgxQRT}qncM0$@o $+<!?B');
define('SECURE_AUTH_KEY',  'T|3V]ozJ1)D*b`S+m6~yVG+kS5x>Dd=K*/[H%AWV]]E0_b A]&-$^_m3yNh/l(cC');
define('LOGGED_IN_KEY',    '~.r3^Vy!-j&{5}%A*t&5}x@X?j7Bp~?wp[Hq Yga1rrlr`[q3<rgw>:e_m`td8F-');
define('NONCE_KEY',        'j-tO[Vco*0=T~Q.Ds:<p`H (=bGlx?cZ^}?h^.j@G+f-d:G%%Z+;|pO9&K+`Y*F?');
define('AUTH_SALT',        'VH%V!uVmFX/DJ5gutR7w1g.X$K|_V7tz(uGBPzm<&kU,)I{>VuRdYx,+N26j?#Q+');
define('SECURE_AUTH_SALT', 'K=ri^y]k)XE^q.3xoNpk.o[*%dZv&ic{5R?LpmvA7~w[sj=powa]|}S[z@~6.ZWX');
define('LOGGED_IN_SALT',   'oYB)&~N0@qQN{e< ICdsB^/wqNCP%`nUDnOg/&97aa/2tdrNJC8@d2+K42ll`O5U');
define('NONCE_SALT',       '>+bm0 [V1R+wj_`wcA+duF(11Oo$/p5{/ Xwl/Q23p{$(f3ee-}?yF!%|H>9m#3<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
