<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bodnerWineCompany');

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
define('AUTH_KEY',         '<T!@_y<60*H6nk<lCO6ujf^fP4KJ%VaEqO`ER.G7~qChP$-+IPWO|pWI<:G}4R[U');
define('SECURE_AUTH_KEY',  'ahb-,k:u W`<kj!S =4@,&r[7Eo6)T6rLGF/S/J9~dl^n^p!Qlu:^r&:;a;%@3{i');
define('LOGGED_IN_KEY',    'E#jZy+QLTd+r|)Q7`?R7`i?CIv{0sy0+YXjH{I3@ds1{C4d*-5~MbXe}yN4.wE0 ');
define('NONCE_KEY',        'uIPdlMR,&&#8v@QoPC:kV;Bv<?+3(VU|rq2ALT9Ol23tn;8zG+CwYj_W@kh+.*Zd');
define('AUTH_SALT',        '4,1kW.Bws=E<t-/l~f6jXAHpPBp_iH6`4m8f5mxPR-sZLm_EmSyi}BYUr>WQ9,DT');
define('SECURE_AUTH_SALT', 'C4CR=XGo%9]-9o5Gb_+Mfq}ZC!$?R|j[_L4B%pHY{/!8;+XuM86wV#Q%t0g3_wZ4');
define('LOGGED_IN_SALT',   '8TVV<Ci;Iz-;Sm>IaMaKn4K.=[1C}pM7*C$+hRICwl, CW|tRZ$f$wr<Fp+3rd _');
define('NONCE_SALT',       'Iw)-f3VT;-Ce~CnVIdsz_z`M~~la6WKQ/>[ d;{a/:&Zh*@r;mXfY$:JFxMj exX');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
