<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'menu_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'O;>:2a4Mr}*,4k_]$R88M^gT#@Cu)9eJLX:{$*LffLDhv?~x->@ZJN`eM8ov|geD' );
define( 'SECURE_AUTH_KEY',  '_h]yqEaMHcq2?2)m>9&/:J{H;c9{/L^sOt-8,#xR*yzwz@9U/fJkt53}}6$|v&T<' );
define( 'LOGGED_IN_KEY',    'UlD(VQ_).yrC]+L}B#iVFqY?M?.QjFiFGo[HPv(2(2-Tp%TjEyC/Pq[ jMb;wq,T' );
define( 'NONCE_KEY',        'OBpMkFDQW7N?]&A~b=;KHmW,bBv&Cp/tP^,AFFP8;LB~s49YPd~8r[_tf>(BIc$s' );
define( 'AUTH_SALT',        '=FQBC4j}8qB:F){rd8Bb9CbE!0:fn JiwA#r`y(sA`0&NGR=K7IhiA![@oDj.r7^' );
define( 'SECURE_AUTH_SALT', 'wuDNXk8E!xA-al$~Yzn.IFy1%:L3)2-6edgG;6w7!KK5KYpPlMiCFLrHpVf={%w,' );
define( 'LOGGED_IN_SALT',   'C$}7^-/2){.j(4{/rt>:Rf%@oC*BQNS.vs;[_s{BQux%0kdmBdf4fAi7~I0cMpbv' );
define( 'NONCE_SALT',       '-IwhFu.!&lr6x11WxTovs@(8IzT%c.e?tB.~L9<_ KA3S1HxmJlQM_}t-iPZ_Km!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
