<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link <?php  ?> Editing
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
define('DB_NAME', 'testpress_db');

/** MySQL database username */
define('DB_USER', 'testpuser');

/** MySQL database password */
define('DB_PASSWORD', 'qwe123');

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
define('AUTH_KEY',         ';JS2npEB1oKhSp-{Um/v2>L^L?`->I92p@f(1J]f7Uo-cv-uVDJ 6!6}P^3q~8|@');
define('SECURE_AUTH_KEY',  '4*J_l42OJa|E^sx3Eu9&:LhADM4E!4h]!,Wh|N$]-b:jO2)pg7gm{*V%r5]/mC}s');
define('LOGGED_IN_KEY',    'P.r5^1/P/[CRRgrx,Y,;LuP&$fx/W?-a3so>ticF|/6X~U*I0WDEH=|KLG!$ W2S');
define('NONCE_KEY',        'PN^L;.J-tb0K~Vp!U++60xc1am(?cPT^~_MoKwqf!Um+nULM+zD2P_YyuC)CE[&l');
define('AUTH_SALT',        '`EnSCZ1CIoIZ&eBY9az599RTrP,^]KptCPi!A2|O`tp6(5O[QC|Q90DC9Dj=X+,:');
define('SECURE_AUTH_SALT', '>r:(jy(k|cR)!A^rWnd- &+7}I8z-t;hr}uD`6  |DlHDk{LZ|g[&ul9@U-$97Oo');
define('LOGGED_IN_SALT',   'p[/xuvlEC2V%/!qjDX:3z;J0-}|z=2$4Qs+1`~4>pt!b)xDAuQHzNLY|;5,*k=ZB');
define('NONCE_SALT',       'Ovp<R&!.yZDWmH={!s9o0u-c/zzct8iFj7+OWGW+QjRbw{.Jd]#Yz4];ub?-aG46');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tp1';

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
