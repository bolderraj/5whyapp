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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ea5e44659a053e59882f60609d95623afa2424653ff05b5a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'aO`=Fu^)sBA`&zZczfi#| jo]dsgbO)S:DLNIN328.(k/.(%CWX5it>L;[,[scV(' );
define( 'SECURE_AUTH_KEY',  'D*NHc893o5e<viN}dUTlc*I_=|&9uO~gkb>wP?CV}dr0,4FGn@,=bVH*3X|-. WG' );
define( 'LOGGED_IN_KEY',    'W_XMA0{~-)mqT4wGm}@DgCyw8C]**tX0e@}=Sss(Z+t&K+_g]Vw7Xf9Z$ZWf;a_k' );
define( 'NONCE_KEY',        '@lz=RW(B B+<_..jN)$BXUe!{Uuq?VF>|(l+p0Hzj%[84^8|2.F:l[,|_rnce(m{' );
define( 'AUTH_SALT',        '2<tk+JN8KVtMGOqclv,Uh!t@#Q>;L]G8!?1H=$0Z*BW>2(F50#K&4_g6zD_2mFCs' );
define( 'SECURE_AUTH_SALT', 'mA;@zrjVTJf=UQj>in(:>ZMB3tR}.WiW77iMeBxP2]zQY@C(Pw?4IPiJ?DYF3:=M' );
define( 'LOGGED_IN_SALT',   '@<g7A^56un(>%`JPPzR!4~g&A})*!em7:u$-/$uh)>gVUNQlhL`xr(td-nqQ9I<B' );
define( 'NONCE_SALT',       ',cSdl]<:.;r>lpmVTcu@C`sPVr|ogQmorA$R1~~GhK}i#a`g;JnHX6,ue?d@A.+U' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
