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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordblog');

/** MySQL database password */
define('DB_PASSWORD', 'eijeamandus');

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
define('AUTH_KEY',         'G?]FDzr6}+yO{e`_Z7FK6q?LQ#kT-7FI7[j%Ea@1p|6BCn5;*EJ)Hyp7QZ/[X-$>');
define('SECURE_AUTH_KEY',  '&irbPJQPg9yr[fk{TId*[P2S,n*{+kQTIX-3@1T]|=!$hX0+<H~Hbefy)abQtM<`');
define('LOGGED_IN_KEY',    '@u1x7E_-~nD*O#GTA@/+$q-bY50.o2y&ZMC~If{&x -BI~=@IOv)?L3C}e+``2Q+');
define('NONCE_KEY',        '+7qi=^U|0>Nl68+%J|AP4 Kf8-02*9H08U!*vZnC(W AGDF| ,Cu]h]K6  NHGb ');
define('AUTH_SALT',        ']C@T!B84~9/SP.5M@r }zd)>[&owgIW%7wMmr~!{UM`ms,QSXp>)UKoUT1SZyS|q');
define('SECURE_AUTH_SALT', '_iex ]Ddp+DgdQ!o&uA80$?Y_]-Y02ig6DfK_0k/!?r+GE~*|F+/cDcgr[RcW:=4');
define('LOGGED_IN_SALT',   'a5jWQ+^Ve|v|C<&TBzdaLPd1P$}Lf0fq^zH-FpE$g;xhTn(+af9C0h.ZW^<:<8ms');
define('NONCE_SALT',       'lT1-+M_5-Oesyt$E)-Qf,/.s| tla.SO~mzvpv(1fvR|C;I3% :])1e;pcL^C?3F');

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
define('WPLANG', 'sv_SE');

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
