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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/proyecto_tienda/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'tiendaproyecto');

/** MySQL database username */
define('DB_USER', 'tiendaproyecto');

/** MySQL database password */
define('DB_PASSWORD', 'gringokiller');

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
define('AUTH_KEY',         '4z?nU2|OdBuMek2eUpVa7@&4K~qd_UU2Nw.nyl;I>($5XhS>Btg-ds[@l/8fMj&i');
define('SECURE_AUTH_KEY',  '%8~p$rN,yh<L3m QOY%&kH:H/Y1JTyQyc4pR}Y+iJZvYr0bBATscei*$l2Cm>-y{');
define('LOGGED_IN_KEY',    '828KdmzHtHd0th3u,b9yr%[Z6noNhG6gV$9=&L!v#,YH|EL|x_9%O<<k9y|rtooX');
define('NONCE_KEY',        'l0jM+.jFx76cy[vq1{5hz1IwhUrosA2-sR$sIry_^u^N?MgS|ql;,NX%*Y:$SoK-');
define('AUTH_SALT',        '1LX4M*dlp{bWCzv5aB.gU;UTIm=5VOppDc0~^u``kF<]4CtVAIj9xPn{}l>f_/`c');
define('SECURE_AUTH_SALT', 'MiQmv%6JDpKsjP#mwU_YDX~dY58[5W5Ds0n>zZSk+T])?*eJvAi(GD8;^{T9%X=k');
define('LOGGED_IN_SALT',   '!:HLZgIiCj `v;H%Q@@Gt?|DcRxnrbN|lg(Ms3[kNqpnlN+f5Ts$ERd[OGx705(7');
define('NONCE_SALT',       '=+sYeUeU?o+GNd@g+nYD%D,*oAx%wfgh u}5b[i,byOO~YLaA0za8N)kN4cx!Mq;');

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
define( 'WP_HOME', 'http://192.168.43.114/proyecto_tienda/' );
define( 'WP_SITEURL', 'http://192.168.43.114/proyecto_tienda/' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

