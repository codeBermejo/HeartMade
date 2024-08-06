<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '10063501_wp_bzci0' );

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
define( 'AUTH_KEY',         'ME|;,APq.RUa,m:[@qIlgPNTCQHT?,%(!:q1V4?fB)tqooE1-of,82IAl>QEDW@-' );
define( 'SECURE_AUTH_KEY',  'Fd77tkG<dkv+$u;nuB/z{FBvd;*#(o}LB~8U4W7CCp_h4:Q$n[9>a}pvfn{UT;-^' );
define( 'LOGGED_IN_KEY',    '$Ar*@22h330vUtXG6s~hPtU(~dM0?5/q9GfWw16s>.A[ASOS`PBsI@z}4^DQrvFz' );
define( 'NONCE_KEY',        '{C3&Kj}MFUU5Uu~`jahrhZ?u90E<:hh=4vDiC7c^!/U^Yps5-5ue`@ct<jCcjM.]' );
define( 'AUTH_SALT',        'R$<zw4dR7 v<~jb>kxny C9bR(Tc85iA`=>uK}(^).Cw[.iM/$nAuA*jU.aWUrw ' );
define( 'SECURE_AUTH_SALT', ',,m$=JTc*>_c1Vu5@Rar6~-4X]_RamaIFDuk{v!(vIH`|Q%nP`8a)CqZP_P|$Oih' );
define( 'LOGGED_IN_SALT',   'gZL#9uNf@X4dEtsE7paDTh=JKh#WyE(QD6Or2Ot==gyA?Wqu|T1=[</q`QXy>.V&' );
define( 'NONCE_SALT',       '1twxNn NRA`pJ.HIF[16PncrEwy%?UKw/`<WC%ULto_mPx9;>z1G-teIyBSav@|u' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
