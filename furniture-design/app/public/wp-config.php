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
define( 'AUTH_KEY',          'PPRo6m^SDNGaK7-Hsa)ikj~d!XR5I*  Rbw~v(dn.zpYjf!&WzmNU%8Ryb 5cH8c' );
define( 'SECURE_AUTH_KEY',   'Qq);7:V-R/[E^MYx!o?HRNfz6CQ8f!Qm>T/d1C_ 2=Q%;],]g=(jyZD{%tXj=7i|' );
define( 'LOGGED_IN_KEY',     '|>Cf=-#!>qfL%,ZN!5K;Y5S.F:VzINq*[?6k^tx15!*4NFAcOn$s@&xB*^nmYM2B' );
define( 'NONCE_KEY',         'scj>giL-V%TOQCNBlx^5$l?<pPS$~>KBUrq?0pc2lv-@`A]uy{t}a_=CWf4uM}: ' );
define( 'AUTH_SALT',         'h14n4/9h&Nx4~ePZ@Y&GzZ|!LOUj7K1q@9,^.B4>Y<dT?/a_QO<Y#LWCYjdQw<+F' );
define( 'SECURE_AUTH_SALT',  ':sI:,;H8`{%43bjO~FMDw@B,%NG1t~BOg|w5a! Ycf$4e${UhVl.SS;(>C+[tGo2' );
define( 'LOGGED_IN_SALT',    'jvmf#+-3nfJ~)N<bM/vpgn{W:in`D(B[uS?(2K^W,P3xEk?sn63VE{:a_y@BF`a-' );
define( 'NONCE_SALT',        'YD4TCDf}qTXdy0Lgb1iZQwRnVw$KUUHI!ZMatn~)j>twe,y){N*t4*oJB{?<;DtX' );
define( 'WP_CACHE_KEY_SALT', ';q}L/Q;1!@yIwNZKkBDcWH!*O-`| 3oGxu<}!=7$eS_zHiCdmkS,hs{(S!.ypM0A' );


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
