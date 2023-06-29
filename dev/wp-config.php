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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qD)NXg@M3W}sfM^)N=S1NGNSf4)h02p^9#pfh %X!D,)qaN5jh=J(W^3VmP8k~RT' );
define( 'SECURE_AUTH_KEY',  'A1ank-FkqmMphtXC*1j(q(>[(*YrF`hN7:Ox4bAJDG1Iv55h7>G2|E^:1,6Dv*I5' );
define( 'LOGGED_IN_KEY',    's5},{[qZq5O;]Zjz_>BbIzkC|QhO,d&p^|t!IV%(4@fuq]F96;WXx1iu&ptm[IXj' );
define( 'NONCE_KEY',        'KG8 ?px3_nAJ2%pNoiC^_<lTBFU4J&0cnbDK(,,m4v|ffct}xKgI/fOq/R.B>S.X' );
define( 'AUTH_SALT',        ',VMPR4v,Qw?|:7z+oU{t.?l5f,dnCOf{x_yfVj?wR` (r&?*.[9T[d{h{}aTGTO ' );
define( 'SECURE_AUTH_SALT', 'mm3r;g>, 6)W2E6nM%sIx7x=]SUJ6?5fAm2iV#azP52.edM`K[l!:|eZa)}Zh6-r' );
define( 'LOGGED_IN_SALT',   'Xc @{zOiSQs]J4hFP;7}hza#C2<6dv&>|dOxi4irAe6~A?ws7qs>}anOmXu=X^C[' );
define( 'NONCE_SALT',       'l_dSz+;tkJ@1;B@Inx30a!l.0KbxOm_YR^K79[Z<ga(@|2#BUCC;*6>>=8X:piZA' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
