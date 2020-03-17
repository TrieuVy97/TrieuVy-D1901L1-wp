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
define( 'DB_NAME', 'trieuvy' );

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
define( 'AUTH_KEY',         'J8uMRzVlJMlHPGv?HC|b`6[(4KN12&Y-jek>=&u I<Qz v9*`&+b+u@aHJ>iZz+l' );
define( 'SECURE_AUTH_KEY',  'UP#95G=0d3;1`MG.yz1UtH8QB@y$uug;6-U3k{z^0]-LK>Nr=V_rqSY!d1rM4!44' );
define( 'LOGGED_IN_KEY',    'x/{Lo7%WU`&v_Qd:;MQ2o5SgFo-,;c9CMz%pUvi^faya[O(!m(ZDa5kjz.<>E[$m' );
define( 'NONCE_KEY',        'DkrhM0VmR>v5d<6ap7PRsE{WA2;m*gE0DWJ0YBOP5H51l=LV;xR|(*fsEn>wMY@3' );
define( 'AUTH_SALT',        'T,z09q|cUDHk@52jsbhLDQ+Qn*SsldQRo{Yi#=GuZix*.^ s7(.Jzp%l| &/<:sL' );
define( 'SECURE_AUTH_SALT', '(up:][s[,0yS!2MgQqU<.{8Sd:=i]P6Il3Sfyl=Xm**we4(L6c.A-rjr8dFFFTg9' );
define( 'LOGGED_IN_SALT',   '[&Pz-+[E`lp5@_e2<IkiA]QM:w!Zv1~~2b;])4eTKivS|s(R~Rrm&9|k#W6@Wl0n' );
define( 'NONCE_SALT',       'NDG6QDjG7MsU&d3eN+.[ib>1&A0CB)gqMHQJ}qe;r]7Sn<5i7$!gLI;^ff0~Ana&' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
