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
define('DB_NAME', 'wp-data');

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
define('AUTH_KEY',         'c@W3=2Fz/YMvi.!pKwT&0*GaV!ZZeY<|VjLo_8#4)r.R=h-gb69k-!,~w8AYT4})');
define('SECURE_AUTH_KEY',  'cyiCma}[b!^n]Zr0:9?FHEjk28tmAV#G.^3t@v-Gh-H9W^hSYTC4+pFahqVhy`xB');
define('LOGGED_IN_KEY',    'CKAkvD$ReTl0K{>M+$)nJ!$o2i6SL,a:Y)b#_r2)J~%Wp(l/SAKx-F o)-pKV&~C');
define('NONCE_KEY',        'Q5qUD5b.JZ+[bCtY5q<vPqdYJd-g<LJaEmK`$g^:iqf:JTu[loQ ?,<1Bh-ogQ4I');
define('AUTH_SALT',        '|$y@,?K}]|j;Tu0fj%.C(2/YZjF j,f6OM)).kQ)Dou8C3g1|3kw}fN>QY$:{n3s');
define('SECURE_AUTH_SALT', '^[{eW-Bqc>T*0L7,qEMq5=aNuN)]Um;}v;oky-vukv,Z&ktM5Qs 4. ):;a$CIwM');
define('LOGGED_IN_SALT',   '2sVPp*me^k3&5h(ig?`yRco|o6C4_,1}D1pd;-y9fS80>vcNwQ!8><e<.[~!*XZo');
define('NONCE_SALT',       '& {=`KcowL}~.6S[`;d5 iDe@qS}m*Nj~UXuZ)Yxnc=a|@3+>eaHPJ8J?`mS3?S>');

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
