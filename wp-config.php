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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'natc.com' );

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
define( 'AUTH_KEY',         'OJ5eye0SRnei0+it9n{}gC`]&>8FOS{oG7 ,Iz2^iYJ9,e1wW Avx+QwQ[So^+OI' );
define( 'SECURE_AUTH_KEY',  '&rm8E^lvcT;#P4=,uJ.W/zUC4PR?PtUTzTyam<gIRCh/58R9T~J g&B_s*, =SId' );
define( 'LOGGED_IN_KEY',    '7P:a?QWQ#!*7ddq_<LIHXd:@q`c)_7!|>Yb2C@u/*j;ENEvj%gS9{A5{;mJh^6w+' );
define( 'NONCE_KEY',        '71F52gi(-gA,<@c@.XcM9rE Vq4=imjTTF:iM.WAyoz-{`@+ez8a#UXVnYjSR@G!' );
define( 'AUTH_SALT',        'F|2H,[LiM{B}M+Ir x-(gJiEa_p5;Z^F()ALt,Q L={V`~Rh|aP=P>KpZthFm22g' );
define( 'SECURE_AUTH_SALT', 'am/&m)7N5x$)UESC^3|,}9V!<u{/0wC{?m~5+IYbNw|6W`B3YMYHwH~[X/bcC#,l' );
define( 'LOGGED_IN_SALT',   'wQgb{;Od(S$-OBl-KRrI#@fK_W*$bsQ=|3_R5}ACDOj6[+?q*$9Ri~xYvA5#h[(1' );
define( 'NONCE_SALT',       'vJZDG0HjSTgmOHVw|0AzZX732<gXDf&240m=LD-`=yo4}AiKQe^AZMF8]kU1(1YR' );

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
