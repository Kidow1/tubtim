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
define( 'AUTH_KEY',          '6*b65U6t<fxlAEW,Il)uR_0v-*J0v!G/PadH&ocn`u,9isE$~e4~3H_rtrN1ihU<' );
define( 'SECURE_AUTH_KEY',   '$5J/:$U0f0Wmd)>tYYou=gx3?~0$o_pNw;(@Dkae9[qcSH$!x2TDhEYG}j!t_B!o' );
define( 'LOGGED_IN_KEY',     's:y),Y)|@1)]iqT|5`?QZC:xfmmN!>[9s<AO%sEh0.2?x9)}cV>0EH{:n^78[-Rz' );
define( 'NONCE_KEY',         '!d2=SUb3Cnw@C+ Y;KB-.g>yP?Jxoa0Z}!cBOuO~#e<a${:M4,,~}AmE/[6~EU[x' );
define( 'AUTH_SALT',         '%5Y6gShE.65+tQ[? a&Smn5/-7k,<{_&_@wJ**6GsasbyuRl*9h^bQbz{%-.vgD*' );
define( 'SECURE_AUTH_SALT',  'WT0S,0rTEYsydBq`/Ey2H;oJ<(Hdib<&`C9L*Eh&y-k*a)~@M!QDmj[O#!c_(sEe' );
define( 'LOGGED_IN_SALT',    '_yDe>_I6q?Ng5IB jlO{#PuK436Dl(U71+elhRo+w$RqaPVG5pSCJG!*8H2=jA~z' );
define( 'NONCE_SALT',        '*IcJ`v}Q~DyF|n0/Z|~Bf`45L3q,2X8&Zi+)h|Ap0PH,YJuDV7N1;5L&@+pCYL@$' );
define( 'WP_CACHE_KEY_SALT', '%rZoRKzlB1:sF1d.d@>~wzoVa$`|A9I7Iq0&b70/PS>Gmm.JB4l~xlV8_RsMVL{<' );


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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
