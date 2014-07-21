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
define('DB_NAME', 'fredrikaronsson');

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
define('AUTH_KEY',         'q|5z2p(J1HAKbA4BwwbSCM70@Qz|Wz/rzExP+,!)0!<|[u2vU2Fxb`J(#69eX1>T');
define('SECURE_AUTH_KEY',  '3tCu.6X}l&R^,IY?Dom4j{)b$}JSC)wyS^ceUYrZwxV*^M.@Iu[Gjy/C 1,&9fjn');
define('LOGGED_IN_KEY',    '-i_TJ(`]LPSe*T.-vX%CpAuv3h/FY[ReW[ MSR<y,*7yuJAe<4-{UnogzIa|8?dF');
define('NONCE_KEY',        '{hR!01a;2?R0|fa+4OHm*L1k=j/@.!T!(Mye%S+CD5Fj/Swr+?*5*;j(J8.yJ+cM');
define('AUTH_SALT',        '3=S.~f-mh,W2@|-V5-v-$o4&3=M=gEc$URuS$+(5}L)aHcSeqA}Dr?9u =.|O-r+');
define('SECURE_AUTH_SALT', '~C+mJ:$e[dT.rmc4`cwV %u.Q+Rt|@bgOz~3.+e9wOz-72MN|xRSzif#KW5CgZXo');
define('LOGGED_IN_SALT',   '&ETd+W{s[=a|TYRpHLBU;;y8+s*9o-rvVDy<9|;@p7pPSg!NTE55>%a_677h$IHw');
define('NONCE_SALT',       'scC..X;iJIPjC41ti3W;G|{m)J.<KR:ra#kR_CM7n^j rU>kuyXTdBgc|PiLJ0;+');

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
