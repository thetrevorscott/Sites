<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ShastaWells');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'f[((xa1m5pacb){TBwtlCn+TR%%Q)>k?%mUYHq,t+*&x:}(A0woLWf6,*Y OHL-X');
define('SECURE_AUTH_KEY',  '3QJL_-IvG=S+mV_|<m[]7lo@,]+!4u.eFL!@6As[o;NA0.{5|U$nps4%zB;% ;`^');
define('LOGGED_IN_KEY',    'b8$G)0pR4:*-|!5eG-1wiWXCoW49L0 GB K:xz1T!.(Q=Q0eV}wvlK}pX3fM7pkD');
define('NONCE_KEY',        'NJCq2O2Jm$[-naHo3VzpnnA>%8O-4`Y8YGP9$DIJ5y5$zZ7923>J4A6-7!i.<yb?');
define('AUTH_SALT',        'B]BRMTpd0DT>+}l H9ro[T]o=yyWgd-av,([BFU=+%4b$eP-8$W;^HOeo=yjru04');
define('SECURE_AUTH_SALT', 'd/TGyI&VFu^@=)_{2HmUTw4/B)e#!WU.aB77/Y#w}?[-=A3Tv#61,1eYl=!BG#g#');
define('LOGGED_IN_SALT',   ';gUKA}+]cg}{}sX@@Z8tgxq0L+~+/iXq09mNc2R,sj;MDN$>XFF3NaE>@m@~L?@]');
define('NONCE_SALT',       '`v>n*va^1ZrTM/>|Yz<4/R@.{~y0+)eQFQ6gj[5{)F^!2`(W4bcS{M]-yEj8pExz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
