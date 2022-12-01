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
define( 'DB_NAME', 'project_one' );

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
define( 'AUTH_KEY',         '_};.C>85nV3.WW^45Mt,cVO@a%sIu V<IL#nE8GFlJO:<5qSd-bQ@F`qzX2=n4VE' );
define( 'SECURE_AUTH_KEY',  'd+m=S!-e=@4|eIG{ % 9YOR2C0p} {K{gUXsZ$@sntOi*r-8TF:mSwnjk3vnqHAS' );
define( 'LOGGED_IN_KEY',    'TO&Nuh<}c=`VPe@e^q8hW<&=pLE7MvKzh%p{FH2NWQ 35(W^zNN:!8jRg,KB%crb' );
define( 'NONCE_KEY',        'C*<W5J6fm(JZ!pI8|G4_LV*iv(MKj)weN6$V/6`:eO,5_Leum|B!<9G/@wo-Se7W' );
define( 'AUTH_SALT',        'Kmb#qPx/(Un4)j| &GxkvwR&1Mo|wdNQ@c)dX|tK~,S2ok4%8ik`cvcj+l?~YR_@' );
define( 'SECURE_AUTH_SALT', '._+IN-;o:8Tzx_rq$y7GVJ!LQ7Dlv{jr=?zL_$S@nk[#o/^.:|A+s_rj?|?k|jUf' );
define( 'LOGGED_IN_SALT',   '6^Wa3kFMoKy? Q*g$iv9#L(;u8tKu]IcVRiX0==g87wQ3C?yLR=>(}T+JSRpvM8L' );
define( 'NONCE_SALT',       '-+W;cSLTL78U%qKcph:6 7XQQ-*,@p,:0xd3%o+pI_|OMHWJ.+h51)%oHvI5W4}L' );

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
