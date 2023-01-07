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
define( 'DB_NAME', 'aman-site' );

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
define( 'AUTH_KEY',         'wO4GbJugAB>7#.^I7X?M&87lN5ooJL**9]9_DB_^R<h$LDt974JJLnZUTg|[N:1V' );
define( 'SECURE_AUTH_KEY',  'vHwI{(2&%SLH{Z*oC>bgdCeo:P~Vk b/-adMU-*!+BcQaiyG#k};6`[D!OjEn/g!' );
define( 'LOGGED_IN_KEY',    'T[*Fea6dyE_8]M_:X`?(A*dy:@QwcaXZ$n+z:<gdK?%PSy9-dZ6.hIEC1-p2xJp#' );
define( 'NONCE_KEY',        'qrvJ`(y:]2M86PMjKvl2:yg_SX~[8=7@+KF-}twvh2FaW4NK>R6>Q+iFX}7Vvx:r' );
define( 'AUTH_SALT',        '1ieK+Tld2dVI|JN(N?ZpKaIqP(]*Q$%0t,5nHT3hu_sWEElU4SaEdE#xLu09uRYd' );
define( 'SECURE_AUTH_SALT', '~T|9:B(&al2A6K,9P%E}bR)BpS+zJW-`ujBAI_!aHm8Ke?-9/fw,f&$`[jhsdcy4' );
define( 'LOGGED_IN_SALT',   'K]0O=syz7Ey_<DcgE!_zlE0`_Pke;VNo2H}&&,.{FuZ,E=lE[n^6xuZ} koddq}a' );
define( 'NONCE_SALT',       'YWipU1*@N_?^4[;pAMLb>Y}F!|a^+&E(x0o+N;RR$Y+{o)-F$DRbJ_.y?#-%2B,G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ak_';

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
define('FS_METHOD', 'direct');