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
define( 'DB_NAME', 'e-commerce website' );

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
define( 'AUTH_KEY',         'WfeR--{G}EcPTRFd8T84H7UDXzitd(K2+J]0v16+J`%94=vOiGqF]&3tieE{_ _)' );
define( 'SECURE_AUTH_KEY',  'tJ|U*{!U{yV6X@3vG(L95sFSUPNwny+]d.?29R0] )t70Mn=H688nbaWLr5^dt<u' );
define( 'LOGGED_IN_KEY',    'RbGB:j)n#.nzzb9:(J]H&s1W5RqN{G_H_o<~*9dqH3OHx,s)G&cb]=vebR0KK^LW' );
define( 'NONCE_KEY',        'hQ3{w.d6o57=5;]k(uWRK,uMHVZ=~2DqeOj$@qdnES[+$i$n4LT!MvpCu8R .|#n' );
define( 'AUTH_SALT',        'jzE63|Nm3&$A$uG7I?/:Me#Y#40FVGbmi:}Mkd9({]t40=DpWo7ja9@x?MZH=UKD' );
define( 'SECURE_AUTH_SALT', '?&gT#Bf<n;)n~Em2-Hm;s{c:WERPQ*g{4b:(:FY&!nSmGJ{X7|H{{Ma(!NgjaR1g' );
define( 'LOGGED_IN_SALT',   '{4^&[f`!{&_*V@Cov?7PuGge)l_gl:k/hW),_q[XdU$*!mAHS8/?LvEl0b{2j<JB' );
define( 'NONCE_SALT',       'Xj(lojx6rqk#>&^fp^$wkt?l2TJ>x,HqL[<%SH[Bgj)C3SEF*4j?$@z[5tl[7S1d' );

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
