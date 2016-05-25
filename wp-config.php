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
define('DB_NAME', 'foregroundv2');

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
define('AUTH_KEY',         ')/=~Kb#~pY@-<6n_/e7m3#W^xMJNGR~zq%/Jck/sBnw&)-{r/SX>;9aGR%zR{~FU');
define('SECURE_AUTH_KEY',  'R)5tAIjFFGf4XEy/iq*T^EU/|3|Lnh5Gl/?Zh2t#i01`F>_ g3@$yPy_?0@@ue^)');
define('LOGGED_IN_KEY',    '|im/8,kwd=%.WpG%NFFyP!+-Q~c~TrVlGbm><SXO%04zsLpoqZVOO5th;Dv{~#Ol');
define('NONCE_KEY',        '}m-# GOU,ZoYVfFY3|jX2q{pAub&N{@8 (R (0et<.0vv?bR-d6<!0.@Av6h0yxD');
define('AUTH_SALT',        '9!e*y:^x![NN{u7![fMGzYa</M{waVx?!IJj13 n:]N?(/-+@4a<c9dBX+QdLF`b');
define('SECURE_AUTH_SALT', 'gv?%0{$P*h/^v^0bdfM`3^AW=xM-gcX9Ec&41L +[7j,cm=BUr/K;O(;L4.2b!R:');
define('LOGGED_IN_SALT',   'Y#I|;A~z/DQ!)/q4<YOyVl>:`( 4k|3AHf,WGcB7G;MzAqF}rkvC11|JkV KI+dz');
define('NONCE_SALT',       'VDnBsz6f-!]g%#Kv<QR`8Q|[G_U}Nh.T&Q`zQS`p]MK8 aVigZesyKM;Cu_#FjUF');

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
