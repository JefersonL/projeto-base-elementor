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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'sULl9J&q&^v2nt$9k$b E#jqSx7yM>0Rh>p7o[w5jQDj<Mq7U:7q4q a0;`hGJ[}' );
define( 'SECURE_AUTH_KEY',   'NLZ#ooX]#LCylaguLCp>7(j TycF=vtPs9^Tq4*]]V:(@Q>sTK4hdKxTr5mT5%iT' );
define( 'LOGGED_IN_KEY',     'e*mQakg$QY5vu}^d|lEVUW(TS]_R)nXI$X=j Zx2e](N:f)Lg-vK1fm:zd5CDL*#' );
define( 'NONCE_KEY',         'DTuR$Nqp>^r^:ng6MrF~Tg~2fR|K*,<mI(C(lR,a2&3t8QgQD=9-#?Nv`o@,Q U0' );
define( 'AUTH_SALT',         '[B|}$ E@y]K:U;37D5bmJ[n!_`2 ,h)LyF&F?ui`LnTO)ZYsBDpq*!N{.;wXL:BO' );
define( 'SECURE_AUTH_SALT',  '^FX3i@)zB@:Dpf&5Ewk7:Tw<AH2SwV_vzkDdQtq+X.r}pIy4rgD^QJ(RMZ<F?Qp(' );
define( 'LOGGED_IN_SALT',    'F)k^v=*D(k(hZ1dtF:4SkDP9wacz^&p=&DxfK|Y? sUPf+H{%!aYdT%%vjL2<c(*' );
define( 'NONCE_SALT',        'pmrznV1k~JkZS}[D*dV@%l(0JU >FlDkFdo[oBck.VUxm:pc6tqjUo!hd9o#T<[-' );
define( 'WP_CACHE_KEY_SALT', '~1Xb3wr#Ya]1SjY/p[<*5gi*rM,w#vjIAMP(5B87tHp7Rj3}+)Bc~FZ07@RoBoFx' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );

define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';