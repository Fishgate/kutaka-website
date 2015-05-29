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
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	include( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {
	/** The name of the database for WordPress */
	define('DB_NAME', 'kutaka');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', '');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
	
	/**
	 * For developers: WordPress debugging mode.
	 *
	 * Change this to true to enable the display of notices during development.
	 * It is strongly recommended that plugin and theme developers use WP_DEBUG
	 * in their development environments.
	 */
	define('WP_DEBUG', false);
}

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
define('AUTH_KEY',         'nc<}zd-%#H3Zm*U}FAV<Vz5+O:R&Cq=Qvv8Qa)n+SBAR%fAHGW|8oI9z~iKs`T+V');
define('SECURE_AUTH_KEY',  '`[+q=YE48QjL=(++Xl1c8|76r.2f1{{iyK>6pB_q+D!-KOIJYZ,8.;|BpH<;>qv0');
define('LOGGED_IN_KEY',    '{u.ske}qwF`H:_8bsaB#^4H0ZFNgq-Cs!z`y[.I--zb7(,F9ZEK+XA_<JrN}h4:e');
define('NONCE_KEY',        'C|ymZ|0<AvAX2}Znh5j c:J]/wsF/>^XIiF7KI(~uc;>yD#u.vI:t)w3SHmDPu{N');
define('AUTH_SALT',        's-x;+pCo ;D!}j;/3LHVX57G0s_W)VNykwpmp4CIziw-}=#D[|}3+;Wh9?+^p0u_');
define('SECURE_AUTH_SALT', 'sA3,if^w9PYAAZU.-6LbEUr,qFMQ&ll7clj#0KY~={^L+`]-!$VTO-D.l-cx|;Ku');
define('LOGGED_IN_SALT',   '}C4pm(vR8BiAUducz`g}cnG_4rs!-T.AlA{5;iI;G/[C:q}PG+>(CNJ+-t-> M+_');
define('NONCE_SALT',       'c``+6!+%YS2J5RhmN@N:[*RB90;*w5|p)<1XQ)AzybN=6;,EJ*:Pr]sfgO~2 .y:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
