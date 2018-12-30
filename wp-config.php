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
define('AUTH_KEY',         'kuZX1%`/b<B)~alR.[~u{~%^41l`9Bae}sw7e@(XdflD-OZD49<J_Hjg,R;@%hrF');
define('SECURE_AUTH_KEY',  'pig:Z7kBk_FD)zw<!.X2NNuOP@0-#f{HFW!XfqCT1Cjkn!,)Qb_$#{)m0SkizSD?');
define('LOGGED_IN_KEY',    ';LrA?AdHT+oH 3w*E?jb^T+FM/m6iG&Y(y#GJ|G xdQ9:n_2&C+<5@ ;+tkvQ3*t');
define('NONCE_KEY',        'Bk_`pU2Uc^;,2%G`4Eo0kG6C>VHBBcVa8h]zD3]8cTMno|au;fh[7P{M3D_n0H?V');
define('AUTH_SALT',        'Pdcr!-x$EvrY<E3CG:pnS$I)a/rEx1ebHli75:Z8:8{L16N7Z2@t5`4QbM(q%K&r');
define('SECURE_AUTH_SALT', '3>x!|f{8(KfS-A+N&SyA+q#&>>+e82]d;fW:+|cp|V%F3SO<m!sD`Z8a4e!*[SNB');
define('LOGGED_IN_SALT',   'bn$UVbQ[k#75eS,^^KELlc!d?zZIpZzzWCYn_dK71Zu2#wSHFZ3YSE@Do%V!g;)]');
define('NONCE_SALT',       'eq2><YRb!8uaQCE{`SZ~TSTnX+G.oen9)GMmTnj HIvRT$)y$t2tuZ~ePeD&u>jq');

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
