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
define( 'AUTH_KEY',         'UN(NA(J=Q/?QrK4B}W{W`4}YJrHVHI6|p^$vI:$FbuZE)3<i+6B)g)3oO6ZKsJM`' );
define( 'SECURE_AUTH_KEY',  'mj|r=QsGG[}vkJ?IRt)sI7lX]kvrYvgX[coG]C(iEWKBSN.gFteNI0#dbqLtzZJ.' );
define( 'LOGGED_IN_KEY',    'Q+5}9(9|A@~/o=i17=%HvQ`}M2ynikR5.y4%Q o]*-y<Jek2w9RS!8LDs2ZyseUJ' );
define( 'NONCE_KEY',        'OhD0`$[>zb[K? 1=?X|&PLF.Q3:HVE:aEGh8uFjLzr}udY,ez2fs(So)TCTHM[oG' );
define( 'AUTH_SALT',        'Lg6QGi=KRp]:^,S?HOCmC}vRb~%zzYF|(^$mbHnQnp>eO.EI1Z.-eBnm:%hK^gy{' );
define( 'SECURE_AUTH_SALT', 'x_ Kig8%SNGU?8|j}M;gg{Y)?|%c<2Wb+hF#e018o3 !eu[=0B<kZ@%k`Ku[Ll3G' );
define( 'LOGGED_IN_SALT',   '#<U4R)fM-,yv~2I 7iK`>Xb6Oi h.Ux.ppy]+B]*h;;n?hgh^XMJoF1v9I#R2%-s' );
define( 'NONCE_SALT',       '=;_g*t#+4N}E|SJr9yfWoK~vTyAJuKA(VuR/iqkSc>h6[p2t:fZ,.`~0&LP0k^=0' );

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
