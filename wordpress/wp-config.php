<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Pharmacy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'REmhw_H?g_m-|F#vYuy/_!*J2!p,334t5n[g2c7l[/nt!)Vy@3}RUbQ<aJ<+#]<I' );
define( 'SECURE_AUTH_KEY',  '?L_-p%5stj}6/TpoT+ASNKg|ri1bBHJda,sF8^#gKzG/J=>{lGd2d5:;|Jn;k3(C' );
define( 'LOGGED_IN_KEY',    ']5VWY,%@b}(pJfscn[<X46s sOvH4hBZ6rF.G&6tKO(sh}uC9<@cRSvE~QA$M@xo' );
define( 'NONCE_KEY',        'H?@-dQEqJ]a=b?p>c=#8fO/BpN3Nx: FPT vK~mV?r}^R75 *g`.HU9c]jGqE^k.' );
define( 'AUTH_SALT',        ');kj/:{2aDvj5M#w 3Oz]~jf^U$Q]Cn>eY62R/A?Xt6?2Q#f7<)RSNUC1YSMU19u' );
define( 'SECURE_AUTH_SALT', 'nt8&#G^!PQ$1FlXKrq~Q].tOvU*)]x62=XOX* B-I{xy*M.BU;T/en8azK)|@u&a' );
define( 'LOGGED_IN_SALT',   'Wq{$],S)8y27hTM`nZFj_O_*oBRkLioUE[{W0,NRZ,,h.Atp+F.QKN%,f9kKQf+)' );
define( 'NONCE_SALT',       'wEO{S6}gQUKDtsJ;.k~bxo|U[nOy#A=8R9%&~Jv*AKjhQtUoBTXcH`b9AU@=mj2x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
