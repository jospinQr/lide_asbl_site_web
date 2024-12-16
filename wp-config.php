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
define( 'DB_NAME', 'lide' );

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
define( 'AUTH_KEY',         'P-:qZzQd0KS=U1(_?74@Y[b^-[%oMwg[9}VbH.#!iMwAJ6N5Nn+ON:fd5VX/hTxy' );
define( 'SECURE_AUTH_KEY',  'VJX1(3_d}eS_@|2V(ziF[_#~0EEjx{?bo[?JI_pSaGTQcb8?@7mR^I4P/g!_#%nf' );
define( 'LOGGED_IN_KEY',    'XST5HHS&-/~AQieaJlt_l@Kyv-`}_g{+r&ML*c=SY}`]WqgOGp}<fTEPkl{GeW&#' );
define( 'NONCE_KEY',        '|Ocrv*W)$ll;kp,G#bN(z_8V8seC!.[-V2l*|`bpQ~/sF$!n9BI),u0(59mH)8;P' );
define( 'AUTH_SALT',        '+`UlIR4/o9N *Z5]Z;oLU1y7]|2<Y42zJrk]^RV)Y]Ma;wC]CpX6a9{5O. UrR;`' );
define( 'SECURE_AUTH_SALT', ')&Qk=BU|h+m=kExE,AdK9&OG1[8 /kj?Z)@YeneI9pHcsQSQ.r;PAT9d15Z]<XfS' );
define( 'LOGGED_IN_SALT',   'P`>-1]4Vj/w1aB5A]GupGE`2x/SOoC%xJ8At9;FnYL||;wv@h6>vg7%g- (F|D)W' );
define( 'NONCE_SALT',       '@:JSA$vZt0vE~Eq kkDJE&C[V/cNswc8SpGgWLz!!xI#V0UkS9%GBibW,CF2R<s%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
