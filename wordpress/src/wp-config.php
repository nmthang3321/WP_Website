<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
/** Name server setting */
define('WP_HOME', $_SERVER['SERVER_NAME']);

define('WP_SITEURL', $_SERVER['SERVER_NAME']);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xt~h m?(FuX x3mm}(}tc]FpnZuTj7TYeIp?_-KI#9_|jp4L[nW0%tAuHKGZl1ih' );
define( 'SECURE_AUTH_KEY',  '>F2r5pZzIqVT$6*aexhe,>KUA0nSkL+dY,)4_:Jp1G?cjwR@+ wP.3nh.gjA/DRU' );
define( 'LOGGED_IN_KEY',    'n+jxw%_)u)k@I#thiYx-4luf7t74=J0#oRqsaxg&cB#Y&p;&@i;6tMTZP!tBjo%3' );
define( 'NONCE_KEY',        'V@DbQuM`QZNBAR?W Qvy*R(Q$I.{Q3HG`^1ImhUJ)&#/+J@LRU4;!oG/#U0k#g^.' );
define( 'AUTH_SALT',        '[p$,D#yZ+khqpUD*vmh>OQ;fe.c)K{plOwS=AU2{@SuMkl=y{ojh7*Q{mk-Ut8Hf' );
define( 'SECURE_AUTH_SALT', 't}}8UMF?lM/PlP,)?{sD_w5wd+Ebfk*SxJfGj_YAu/}qL|)#DNRPd;0X|yB,YL;)' );
define( 'LOGGED_IN_SALT',   'IK/g}ZF.2rdr[I!@#N$]B-yxV K(6jOh4Z{2srQ{A,l3*.r$S%#RCBC4PfoX_mCb' );
define( 'NONCE_SALT',       'pU+_1E:L)mR>;M7a6YsMk=c;/-5?Uv|yVaOHV<uGle&la2l|/_ToGDT4f5j<7vP8' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
