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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '#*7}WnKbR.GIzM}LI[-y-}yz-=A9JD.dUGEm~jw_aHs8?Hb{vqn)*&6`x~+,UpM`');
define('SECURE_AUTH_KEY',  'Cd+Dwa:e<8@Fsd|v`FDM=b7Gqs<O0AtCqQDB>[z  KILtm8p:_CL5=^9&(o_0{7Q');
define('LOGGED_IN_KEY',    'D-A*8!~nKM~_-=bcFWwWrp#)i]aNnm`=8+lrElZU.]q|oL}b):.B3}q1mEw;5=LT');
define('NONCE_KEY',        'o{,1?3O-4EzA.$!4T(3Z1S<-q]ZYX?]v4ElL]N`2h);NHG[-Lh|OWHWCnKS ,x%)');
define('AUTH_SALT',        '1-|mZsdQ&YDl<kQFY||PFi#[2D#k5}Qps`rKF;w[>|b9dV*e5!p# *iyr G-[S-|');
define('SECURE_AUTH_SALT', '<-_zAqD7muit|ay/+b@{]fTBUSFy1@]kvXpg8;e?_k-C%ZIbI%VxJSsT4bGM$nSU');
define('LOGGED_IN_SALT',   '*chjA_#V#^iK^3T`{83|4/mOBQOV 6CB;{~-fc5t|%*Pdt&(PQ&PZalf~t|R5^M6');
define('NONCE_SALT',       '9B;W4t/D5f_aoVk#+e6Eyu}R|8r@-~=E#P;s8w(USjzKn11g*u4/Q!Sd,bd~]d`t');

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
