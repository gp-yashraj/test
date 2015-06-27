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

define('WP_REDIS_HOST', 'wordpress.uyzjrw.0001.usw2.cache.amazonaws.com');
define('WP_HOME','http://52.27.70.211');
define('WP_SITEURL','http://52.27.70.211');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shopyoke');

/** MySQL database username */
define('DB_USER', 'shopyoke');

/** MySQL database password */
define('DB_PASSWORD', 'bhel1000');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cha7mt450bvy.us-west-2.rds.amazonaws.com');

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
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xgX<2]jmWnU~2MT14Q-PSsck~%#S_m&I}m07;!Hz5HC5Sr1YvkxqaI3AG^]YFHn6');
define('SECURE_AUTH_KEY',  'v8fa+^M,22/dpzi-q.xdWncnB6|.%C8^%(xQuod-q`aNBht+6VI,k*B giDh%u&D');
define('LOGGED_IN_KEY',    '#scs1xrx{oiBy9_Mr/pJr/]A *%np!*re<{qP(@ d+c-M2tpM.|=:0!]7YaTqe-!');
define('NONCE_KEY',        'Ij`%zPzX%V]c!H;~E|x-Ox1EM/K`u14hJgz0D,-N]BS:;PF+DKXQ<1o}VH0:2Rf5');
define('AUTH_SALT',        'y(L3yw2;Z>wK.]8As2r%~g^?(KA&=7l~y%tYtYqC2-CS8gTD<]D?{l#.lU-5oRgo');
define('SECURE_AUTH_SALT', 'Y]k&J-o#xJuNp>tAs:8=o@O,z-ocePg^*6>;*{~X|_l!95i>~SP{7i/do?b*efJ`');
define('LOGGED_IN_SALT',   'AK{ggRTb-zLcyX#.`~2-PLp3g^+%`+vNb]A<B`(6]>?=i]+`&u4CkbH~:&d gUX4');
define('NONCE_SALT',       '#slieb@&9@~[6JXwW?_1VPtNDUB7mGA~/U)2TeC_@!G0xeql:C |)Q(n$* _|k%+');

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
