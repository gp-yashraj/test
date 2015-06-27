<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.ph$
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'shopyoke.pdmh93.0001.apse1.cache.amazonaws.com');
define('WP_HOME','http://d2614h8k4tzh8c.cloudfront.net');
define('WP_SITEURL','http://d2614h8k4tzh8c.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shopyoke');

/** MySQL database username */
define('DB_USER', 'shopyoke');

/** MySQL database password */
define('DB_PASSWORD', 'bhel1000');

/** MySQL hostname */
define('DB_HOST', 'shopyoke.cqmi11qydhlb.ap-southeast-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress$
 * You can change these at any point in time to invalidate all existing cookies. This will force al$
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[>;)2K@;VVoREuCdi23g#O[!of!URVqaM-T..;PqVJpe^Pbifr07<z~||eARxk2n');
define('SECURE_AUTH_KEY',  '7TG_1;%n~Guz=6E=U,(tU8wC~c3Imtf+l3Z,/+Rc`_)Ky_.^*O7+TWW6.L#W1*h,');
define('LOGGED_IN_KEY',    'Kny|)<]M.q]KY&Qs45 N:%^z{T_Z}lPy6lb6&H4)w.v{xvR`n]]+1k~G:cn*bO-=');
define('NONCE_KEY',        'o!an/-=`m8ME45m;Z,tg*K:caQVyo0j{Ci=3Lf.DlkL1#n4u}(^k?4S#cyI}- Te');
define('AUTH_SALT',        '7|=s&a1KjW8<w:1[v,Sbc{w=I4>p,>sK:T||>.t#3M:0{_w@R$X|oisyN{S{.0Rb');
define('SECURE_AUTH_SALT', 'YfhkG<jG:F{f5P<wG^PP72;5x#}(w+n0g*IGN*4pI*+XYduw+|Nq>f@!O(8+gc/|');
define('LOGGED_IN_SALT',   'Ot&{_:s:@QfZf/qMSnZy|mS@irf86{f&xTC(d^Q*L$( Ob]&ulNI%5;R]A|mt-<^');
define('NONCE_SALT',       ';%0x;&GT%_IoB/oqyDFn}D^}FIx#v{g[!S5=.CE~lW/6vRGf~oG){>|5$c[1`YGY');


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

