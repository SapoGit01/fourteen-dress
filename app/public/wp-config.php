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
define( 'AUTH_KEY',          'cjcrI#e0;wvyO.E&!?5fv$J>PDPfS4b/RCa6-gP5,m,i_uOpCR=m3s,g2M)cD4.*' );
define( 'SECURE_AUTH_KEY',   ';;q+7M(QC9xoi5}[)lz#~NTHS/gCZ5?VW/UmlB$JSHgnYWt`*4sNsU+2q&l~^UTp' );
define( 'LOGGED_IN_KEY',     '&Lm;}h#FL &nPL_Heq9x:b$C{m9[bnNN-zWDrOd?b1Cp5<z[j|,,)y/}[h{mrMu,' );
define( 'NONCE_KEY',         'CvQ-j7.zl{d]iBlKD~0lKZrZjniVk>ZOG<#1NJGO=?JIQvu*,]O,bXlDjp$}g?KS' );
define( 'AUTH_SALT',         'jl=fx@9]z[/4_l?ANdhsL5k]lbe{fxy7|5,Wjkq#k;LuF4Jj[MAdGX3%yyXoIs4b' );
define( 'SECURE_AUTH_SALT',  'M:u.* s=XcXTNx|5O}M7f4?fDZ!> p:I~]x7DO:s-Y=7A~r&7?xp!%<,.AEfg=Vp' );
define( 'LOGGED_IN_SALT',    'VO=?Hz@bvE&,(}{ExxokB{9@{(P6f)g_u!&4,+N[^?GbV*0DPHf,g89?NM1_MxJI' );
define( 'NONCE_SALT',        '6~ua?S$cPK8_}O(JDwV5}(F`>cQzb67g02NS8@tSRJCngzdX)C//_8dcu,uvAOf!' );
define( 'WP_CACHE_KEY_SALT', 'O^Xt_a.V=N_j|hYm:VyA,yn`O%jVzLx&Mj8_:Fd:WhI7/8:Y089D,6`MZ//#1/}>' );


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
