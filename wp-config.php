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
define('DB_NAME', 'bardenc1_hpf');

/** MySQL database username */
define('DB_USER', 'bardenc1_hpf');

/** MySQL database password */
define('DB_PASSWORD', 'lT3HiG1teUPI');

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
define('AUTH_KEY',         'is%b$<$@F7Qu4{]wUspWH+LL|RSP1{#`-FeUi*C,[%O,Cn[OzW`}?}!XdXdUl_jh');
define('SECURE_AUTH_KEY',  'FQyW)^jkg+b1T<rH:!cj!H+R`*nS>+W`[*K5OA&J0zFrSbMWkeq6-y$:XSpF9G5n');
define('LOGGED_IN_KEY',    'YX3.-a?79;l{Wq7Bl&{)`e)Q7caD/UeB6}o7d|GBv#P#lA_39I+:1/=MW1)Y{y0M');
define('NONCE_KEY',        '/.8jKYa/o6DO*{BFQXFhX@:iy^r(y,yk^ZdxQOr>f6997|j[y,wk|u!)-Z;=d-?P');
define('AUTH_SALT',        '`.{3a[sj!wu*m>J[W]IEO8^tcPr;1U.TG|9MDc{(LONxr#vvohM(=W3w uXQ+K.T');
define('SECURE_AUTH_SALT', 'X.WP)5.i$SZ}<fkK+uQ+-k=s6h]A()gD|R+I<%d6qaQays?)rgY+>3bGa3An>tnz');
define('LOGGED_IN_SALT',   '@dp?zM4^e.-|c<gx{Xdj:}G!W(h8&}5yJW!m|NSY|9)+W_Hzm1H`Rv-Y|klfVoW_');
define('NONCE_SALT',       '+V+%x-{wI@Nf+DoywOnSw:>cqp-_ro/$mJma:|.IZA]P(M*WTY{ }(Mu/O}1vi6&');

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
