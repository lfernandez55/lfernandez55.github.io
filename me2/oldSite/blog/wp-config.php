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
define('DB_NAME', 'lfernand_wp1');

/** MySQL database username */
define('DB_USER', 'lfernand_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'B@&eQhs*H0^]9');

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
define('AUTH_KEY',         'zadvdIK60QZLGGszhL7mMqVqqKVzkfPvqD5jIV0GpGhiyZiwiGacGCbiu6GbpJ3A');
define('SECURE_AUTH_KEY',  'OZ93n5lxH3RsgpSbkPk4mTp8iKEktAbKKS0fsMWaRmXt2hQHOT7X1927W2OgFAP8');
define('LOGGED_IN_KEY',    'F58RFLk8VoQsbZ10IRRzD4I5qEijhqwq1fGDcCs6aLfunYPNcfMJY4iSWMXXzPqM');
define('NONCE_KEY',        'WAfd9VPHRehaoIhxpFIWXWs1ngFx4ZG4DisDMJSyWyvmtDl57FCwTbdPdCeR9Xpg');
define('AUTH_SALT',        'pYsooisSTrMySpnNTiUy9QTCuWWAeev6AKejeImpFScmqY1VGcqE0AWIQDHf04xq');
define('SECURE_AUTH_SALT', '0XGWEiv42evck3jX0Tg1Ky6ig4BbVb7GQeMmNKHw7KWUNfiTyaQVpDVlXHn24btz');
define('LOGGED_IN_SALT',   'ljxgu3o99brDS9Bk38EuilITREVxjE6zTA7JznbrKxAocnCzgoBxON9oaZknt2KV');
define('NONCE_SALT',       'jIoaXEL9AJrGEmPO38oqD3BzYnnT4VG93F8ZcBGedOriPivCQKSz2HXoL3z82ONz');

/**
 * Other customizations.
 *
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
