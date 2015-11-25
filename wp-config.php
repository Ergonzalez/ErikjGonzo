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
define('DB_NAME', 'cl55-a-wordp-kdz');

/** MySQL database username */
define('DB_USER', 'cl55-a-wordp-kdz');

/** MySQL database password */
define('DB_PASSWORD', 'GfYYmBqqR');

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
define('AUTH_KEY',         'EB5MFKj0QBjKgeKSaI8xV4tPmGWDRiW)--Q)otBFqur(X_PeK)P7lMN8ZwG=y_Dk');
define('SECURE_AUTH_KEY',  'qsZ!Qali+iAuJwO=xc0ChEl/t^SNzczchfNb4G9NerjdW+HKIGbF-x8Bn#08UT/n');
define('LOGGED_IN_KEY',    'hMR2RjvqMs2Km(m0YflbDwUw+XOc3ko#JA/zQYzh1ixEBd)#dTEO=5HtqQ2dVy/(');
define('NONCE_KEY',        '^)(rsubosCK(Zsc9AAB#zbHihesvBi44qOre7e1VX-mzr9vkytpAqj4^f-14z=UC');
define('AUTH_SALT',        'T)geeauG#SKUfqYPPJ+4)Kr4r7/0OWbirUMr3_XR(JaA/)52kEI(g0uX6skzomHP');
define('SECURE_AUTH_SALT', 'i7n7uU=p3g^D0!Cvq8q52841oe^Gpu7PsckGLkV5OcBHMz(UrX!lihBSxQQ-ELH8');
define('LOGGED_IN_SALT',   'AcTYtuEIC^T(vJa4(d6kYrG5KdAqHp-=db-D9QqR_stUecbH/WfuDbQMMZeVyAV(');
define('NONCE_SALT',       'NTuod=OfYiVzjTGH=TS53y(8yzeU1^eh=E(=J_OkVJ6RC-EljY+mj80g#At)eM47');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

