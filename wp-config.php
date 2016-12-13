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
define('DB_NAME', 'pooperscores');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'dMf{y/z^~F}Dc*WH>}!:GKQ:};DDXQxw&;w(l97GLX~X:(I]V3B,>q1G*AJOO Ok');
define('SECURE_AUTH_KEY',  '_iQ$&# +=LiNZ{ki8Qgkg<XT;VfZ4(6K<w;FQr~BR#EB`XC+::Z2eDA/ILfkm%*j');
define('LOGGED_IN_KEY',    '2t6KcG!A,XLwIC_mX7djDQj+U(-vLDCCjCfPDQi1|{pBA sqFulAx~,) LGeGQQw');
define('NONCE_KEY',        'MNI=WES;!(|fY8HE{~fD%8meU5L|SsAEW@~{%4SeZ.8IH32$Hozi!/S!G$*9_~Ax');
define('AUTH_SALT',        '!uG@eLqn,&[iMQ4qgLfVqZFQM/sH K4gj;wGVwqb ~8NbS{QGtvn]t5Te| [YYn@');
define('SECURE_AUTH_SALT', '3&V*MJxi4H4sP.OTu.JLh3*)Wr)oC}y#IEdh&xu`l$7MCfn+jM]:(BYkF>bC~mbG');
define('LOGGED_IN_SALT',   'G5Z,;o5{y1W4!hqlh6al}_SEqPN,wG*Ys<{{EndOPS{n/]5>SG;Sq2u.G~#X+a:K');
define('NONCE_SALT',       'K0Sj6pRF$ns=pg?rcqUxHPf;&jG=<5(aQZ^fE+.lOdT=h@FZs|Z;y]7Q8ye0+MgZ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
