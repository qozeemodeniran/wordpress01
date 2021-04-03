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
define( 'DB_NAME', 'wordpress01' );

/** MySQL database username */
define( 'DB_USER', 'wordpress01' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress01' );

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
define( 'AUTH_KEY',         'Z_b[X)s@gy5Hp)w%yU.J.uqpZ:h.}`m7!w@IP6C l.]x/ttZ Wgp%]a!f~8CgM;b' );
define( 'SECURE_AUTH_KEY',  'br|j{bR<V=l(j-N8Bq;DA+mWEwAMli-h!]h?&^;pP|&V4G$;MWG;N[Tz)ML}vr4m' );
define( 'LOGGED_IN_KEY',    '[_KlRjDEg1OPxzqVZ<04Vuo?K*h]oQ4Jo6?,AW=Ca{ILGXGi&FxRz&`]h,`~9,K1' );
define( 'NONCE_KEY',        'L#;%-N.m ,G+h4Rn$/bB`g?R) _s|-aw<Xejh=mgUs=bhuTO5MYQd/e{%Sa|t#@0' );
define( 'AUTH_SALT',        '2AFX*4Rf9z.~5&X)jvJf^W6QJ)_;=F{78>#<Nl`TRGWi72mT;6oz6+K~a6Ky7q%T' );
define( 'SECURE_AUTH_SALT', 'PQFMA^S/{)poPR,paQJx^.b2J/8)}d=#*]}TKt?[?,-Y!;q@Jyy1t`?uyqm]]siP' );
define( 'LOGGED_IN_SALT',   'veYQ74Xq2.{%8lHjJj+S^KhI},Q3*13+q_BCUYT0y*#sB:v([!sY.2NmfiiRgq6*' );
define( 'NONCE_SALT',       't~1[g},N=HU_`;j}8u5M.VP^Z%c~4|lA>_E @0KIsfkbsFFK%k9*%mn{j;&`}JM,' );

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
