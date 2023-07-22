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
define( 'DB_NAME', 'yanlieb_portfolio' );

/** Database username */
define( 'DB_USER', 'yanlieb' );

/** Database password */
define( 'DB_PASSWORD', 'Xca2613!' );

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
define( 'AUTH_KEY',          'vqA!D]Vc}}nW.9sOg.6+C}BF;_H^N}KsPfd@`FD:wK)$>[lnS5lJ+`u@zITc[q6v' );
define( 'SECURE_AUTH_KEY',   'CDBB f<Q5}_H744{z5-~)YhL!xTij3@<4xc#KMnSznb1H9EHKZOryG#,/CI ;&&k' );
define( 'LOGGED_IN_KEY',     'Wk~+FsUZ6P<PlH3AEJwwpHxc)at t3.y=N@s<YbisQQ+f*unSd,]-wd*55BL[8y;' );
define( 'NONCE_KEY',         'i57rE6JgAHOt7.Z:Tpmi}whvlE%{2VAz|Q6z8`%/-o4)#N7U*?}PM7^}lJ#[.B5Q' );
define( 'AUTH_SALT',         'VaM~KXiZFK,e|&p9(5(R_DJX2)YK5G:7eb%$hi%?0I>Sx)1YM0m#lWQw1#s5g;BU' );
define( 'SECURE_AUTH_SALT',  'N;Yb])wlcA_YAK<;IkjAox@TSYtBMV g6pxUlNRO|k86Wmj.Rk[N/=JqLiRi]/og' );
define( 'LOGGED_IN_SALT',    'Tw(bnNE>yj.v0{iZ8#aI9n9y@z8CTzp09z|T/tJ<0WQO`r6+ZvJVc6r8<q_b 1_F' );
define( 'NONCE_SALT',        'zw4g~#o]XGP!TzT{R<z}$V#iRES3CpEH1X.x+f|?cGzf#y@LJj-lIAuEY7[W[tk6' );
define( 'WP_CACHE_KEY_SALT', '`1/t>1>j=6%`9W4rFkBp#BS^^<^CwwNcKw]qpwt9.Pf&jetBkV~uG_vgseP4U90n' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
