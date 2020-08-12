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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_edgarodriguez_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '>|I9r#~lGHFpR-r<sJu:. ;c?y#yL+TgZmfel-IpaL}i1tRIs~Sv?[&[32NXE)-U' );
define( 'SECURE_AUTH_KEY',  'K0UdF!2zk&JgYe7[ESV:x9SsCdx?&XbG=sXEu AW%[Ey[o1$|3M?^)n(8K!5:7{v' );
define( 'LOGGED_IN_KEY',    'v2k[dK@2ppph=a2SmY/Vfo=2jP`bo}J Rhxg:x&:NRMK?2kPrmZ>nnY51VaFs87Q' );
define( 'NONCE_KEY',        '2j;aN$-4>sv;$rS8cPG}Rds`(Mc$!PNE(NFFXC~ejTCY-Is-;pH{9jhAK^?nwGb_' );
define( 'AUTH_SALT',        '%>Zb.;i<XM3-I#37ib><]u$e/X)%%^kXr|F.ggk`hlRoG}8*h}>4Rc+KlxKAZKnX' );
define( 'SECURE_AUTH_SALT', '!TL/zA]:TM_Ldl&fn#,2Ngte0of*OlyCucKR8d&6xr? SVHY`Ri9Y}%7]s1CMe!|' );
define( 'LOGGED_IN_SALT',   'F[2@n.P(+Mh>,i*Lpx=n-I={0B38)VKFX`^=u.uoT69m#lJ=7N_l/Rhjok!$$@~p' );
define( 'NONCE_SALT',       '~pC#0yGmTf2KNttt3xFcZ=Q8Md|vq]W} <cmoBaT?1rpw0]DW f/A:9H/-@D^eb:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
