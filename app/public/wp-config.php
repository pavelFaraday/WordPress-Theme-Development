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
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          'o#FWq?hMa@C/j^DfG5r;++xWNu`wJPmzNd#lDMNJs@F8 GTd,|Hckx{~#ELWUVoh');
define('SECURE_AUTH_KEY',   'B$qF4RJl*aZC,_3{lgW#DI2{GN:q)qM{0+`L.q4Vs A,^-nlp[C7Ff~Er?%Q1imY');
define('LOGGED_IN_KEY',     '<YrbiB{RBlj:~e8~}$P;{oeBt73Zw.a(gRo~E4s7)<=or8m>clUf{ewgz7Hk: jz');
define('NONCE_KEY',         'F*?Ob`1<T!MoBb`EhIlC=C4v}F9p>UDdVzSH*n1zfYW z,$myuP*EG@>VEh~}R-D');
define('AUTH_SALT',         '*TvhI;!z?HyY.SipOpEMRKlFZ[#_Tvw#H*F[hEYsaTIR6cH=1wTA%$FI(Dt&NZ5|');
define('SECURE_AUTH_SALT',  '-|mrUa.7P![1:6^=Z6$OXMs(tOuaI_l]jwj[HIvjdE)%OU_;Oi-3PXKKS-L`cK(/');
define('LOGGED_IN_SALT',    'Ac2G6.ih3Yd&HwN2U#)98B6Fgk{(Njl2Nw+vM0cV=SwBS|>f%$/S+be35a~+w[Up');
define('NONCE_SALT',        't$?`d.8]jzmT%#c^3WkdG_8&Rr_,0xuH3mv@Jyc]F0vpR1dWJpuz*].4PM1U1-T=');
define('WP_CACHE_KEY_SALT', 'Kf5/CF8b@l3uT  cy5:nWb,*=Q1FHJ=A|.Hl{m_kF^~^E0/Ij-/<w9REj6wMbfTz');


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
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
