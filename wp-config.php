<?php
define( 'WP_CACHE', true );

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

require_once dirname(__FILE__) . '/../etc/php/lib/CloudezSettings.php';

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', CEZ_DBNAME);

/** MySQL database username */
define('DB_USER', CEZ_DBUSER);

/** MySQL database password */
define('DB_PASSWORD', CEZ_DBPASS);

/** MySQL hostname */
define('DB_HOST', CEZ_DBHOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', CEZ_DBCHARSET);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', ini_get('memory_limit'));


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+GBF30|^k+J!G#eg]5hcSn298kgRK6 `qv4nhGgHe,D<6eBte;e+MV+FZg0F');
define('SECURE_AUTH_KEY',  'C<|`3Z;hs)!>%jj2@}_fK1/+pF$$*{*nk;h$7HP<[3n^v.E0S+c2sc2x)ax+');
define('LOGGED_IN_KEY',    'bw.9u*}w;b(7Qc4aEH}@DAXP+#dBH*e,$,e{!jfjK|>9v`{}[Y [@VH+a8yB');
define('NONCE_KEY',        'r!RA<T ZMQd{vw^y!TKwx:5_[(r+>Bb}tn5!H,$xv$z*02Ate2]P^|*bGpm[');
define('AUTH_SALT',        'qE:n:aXC;*x4Ena,Y7F718+Q$%ka*a3e!8;9T`M0;sf$f#,>1F7MK#ZX3,f]');
define('SECURE_AUTH_SALT', 'VuAF*+33Ya](Vu2Q9]Uxzb2^w>/ 6.{9NQ^vAYjQZy APLN*SD!)|QEgRbYm');
define('LOGGED_IN_SALT',   'K5P^#6.c0]`|^du5CPpAF2QM^fMf]6fWTWXg9(.]aysj9jMP9Y9Q0*<)QKdB');
define('NONCE_SALT',       'vfwE7d.NnE#L3pA802/;uSTYc@$Dxebq#!mrG^#]r62/Xa{B7^js,1UgkhJz');

define('WP_SITEURL', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://allurederme.com.br');
define('WP_HOME', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://allurederme.com.br');

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
define("DISABLE_WP_CRON", true); # CLOUDEZ-WP-CRON

/**
 * security
 */
define('DISALLOW_FILE_EDIT', true);
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
