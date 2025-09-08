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
define( 'AUTH_KEY',          '|(yr0M8, |7ndFD I_(}?/?%S@(@_q}`Gd0AD-(uc|=iA:&e;tG{&PAb>^DomQ(X' );
define( 'SECURE_AUTH_KEY',   '!<N8tFC^q~=|4vI@f)6Q*MYHe*T1L<d0F#=MGL)*7v$iQ_DiV7+i_Wf<HK:#abms' );
define( 'LOGGED_IN_KEY',     '=?eXe P<bkcu.>nSmx9P$y{(714nnn#UmlNK5S`I9:Ebe*.c/,JmoC*b+U ]f,%M' );
define( 'NONCE_KEY',         'X$mK:g&7h)3g(X3faqq=%4V9{1$4cv=nQ)8%*1#metz[#PPwI|8!``=fS<n,0Iv)' );
define( 'AUTH_SALT',         'O**AdYn-wC!Rs<!T*ls0XvaCRN>ysc]hK~(-NyUI=L){y0+0SgNI,(u#6,pKqJ2`' );
define( 'SECURE_AUTH_SALT',  '.mr%+Tk_mL3lz0%XY~.+sEZN6xE}E!(UQ`vTVG|q?}]JnXin*8xD4@?NKOIA2#CE' );
define( 'LOGGED_IN_SALT',    '0vkH/C+Sah$>(Juh+@(+J3?$zTQ.LJ9y4KMr4Sy}[CNSddH7;1xa@Nsk$#RKzLYo' );
define( 'NONCE_SALT',        'ed]sc AUuepfKg2B)8MS?@}T/Q5h5P5n2;rNS_ O6dlV%>_vUhu4Q_o,dTW~K6>A' );
define( 'WP_CACHE_KEY_SALT', 'MD(DhG*A#R><6+39aUY{RsG.>/L5NT+<&t#d$vd&.cfY66PbfUV@3IlOZRpU85RM' );


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
