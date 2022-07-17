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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newbie2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '>_ #_ckvcA)n5ZS~!i,; 0G=^=_ZRXz2ujkn40,wN1,bH`O7<$A,ip>mr)t~2`7R' );
define( 'SECURE_AUTH_KEY',  'u;iW1X.969HrS*xV&Q|6xOk/[zg{Mu,#HzAg?/KkFf2l/;>;q-&V4T^C9Bs.t ]t' );
define( 'LOGGED_IN_KEY',    ')UUIlW:5nS[LYw!_r{{^mO?PmIF>26K #-%cCt:p8JiAH-qocyl#K.8,Y|E88qq{' );
define( 'NONCE_KEY',        '5]Sk2qd>^Hk||gdox/3Ms1N}1oi,Al%&Yw4U3;0u|I8iDwH7kZNR=ojB`o?hHZ(8' );
define( 'AUTH_SALT',        '?wU5Hn U&gJng<),@x^p>.eVMdcg~j8D2[` 1ipXOI1YRz-U|T6A>5,b2+ivIs(Y' );
define( 'SECURE_AUTH_SALT', ':~[:TKna1%}~v&hai-A)fq8thSHZ[Qmn&@n#;xFm|Ns1+IX-(E+{zg=(E(~BQvUq' );
define( 'LOGGED_IN_SALT',   'd7~j!2;t-[ 0T:/tkRz3:G9DurS<=.=gbk+:qcgA}PaOT<WL0B4R|jBmR`,*Y c4' );
define( 'NONCE_SALT',       '/tW3i^yRIB)Tdf/%si97!^6^y.YGw}Y)P`bqp+-acPa*`cjt@M#O{iFD27];&}N}' );

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
