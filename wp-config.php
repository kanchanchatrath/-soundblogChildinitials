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
define('DB_NAME', 'soundblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Pi 6:=_IkP8~CxCl6u.:*(&*0_]ae~.Bep.CB1D<XQ&Swc*D$IV7%Brtn!%XM0vT');
define('SECURE_AUTH_KEY',  '+Xp>d@!74o:zb/e&;dctQi{fsJ,Jqyj7LXyY%3~T*lZknG7w+A[@s,z2p6XV  lt');
define('LOGGED_IN_KEY',    'RdW)5D3a?lFU795qqv6M5M@yGrsy8e_+IhYJwWG}C>VFuwO04k?~a`*H)LC?ZX$4');
define('NONCE_KEY',        '3`>B_e,zfx|4?c!KRnHIUPrh%D}f=RJ:*d$;C`]2y>9GYnlTIa:R%v&cf0e:/1]:');
define('AUTH_SALT',        '1$Q9z.h<n`JlGbhc;?S o ~KqA_<aD6NRVa}Ki=B^#I?mo/_J!wN{zl24AWyMmq/');
define('SECURE_AUTH_SALT', 'AhbP||~{o7=%qb3v(bqu`%Z|v}QNcyV=vE!))Hz`s,LI_#:R$+/$5i!5ExPm6|@3');
define('LOGGED_IN_SALT',   'V $=TX`D :4} c&S}#&W`mCFN;`^-.E(LHSs<eLI-qtE;J*!U28`|9Tugw=$AQr4');
define('NONCE_SALT',       '|pe2l&4hv!{rXk,TLJH(a-Id;PWy7HasEkOV_&WI#zuD+lCVyS,McRQY_pSYodCp');

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
 */define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);
// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);


