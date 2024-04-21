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
define( 'DB_NAME', 'muso_ramen_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'En2aqskS' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '?2NC8a@NP;P:vFucgj$<>6CD0QduiX/|BEdIZ{KXz4JYb);sNM,Pl_@WG(1Orm1>' );
define( 'SECURE_AUTH_KEY',  'o(s$wU:fHn~x)@M_X. lm?yeyWpzD_E2i>2).m6df 9R{/oq)s6m pf%0E3zAn`K' );
define( 'LOGGED_IN_KEY',    '4E7UHF?*`Bo7K%*iSwl,Hnj*1xhGnaabpW<c6l)kf,DrH#BkT2?Lp>(AYW~8?K+k' );
define( 'NONCE_KEY',        'd{-bk-@i0IvfjEi4_2h<cHEqO_4:Y)v&N3<BQ(^E#pciP^Q<l !cy8j2:Q;(hL[v' );
define( 'AUTH_SALT',        'g0qn6F]RJUDH!V4w}dLh9`EbNy2DvZiP`@o2OCu7PdxKBI[BZ;|H(h!YnoM0tRur' );
define( 'SECURE_AUTH_SALT', 'i8lkM)kX`eQl:~,cnqqrm2 *Zm_RK;Hq~FYqd41u< yq.tOTL{6)pVg{5H3V2eU>' );
define( 'LOGGED_IN_SALT',   'M1slD/<]>!b/u sE&pd3=>XQXaq a6sg``+?*JCV]$boHPn|F.gb0I6rC<a?j4Pu' );
define( 'NONCE_SALT',       'xJH[8UJ`bchc @l7]c*qh#0[Z,ou2_1b%%8~=rrp0.y84r)EN@%ek_!jSS^=?@yA' );

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
