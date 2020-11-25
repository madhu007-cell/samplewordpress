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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'wordpress-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'madhu123' );

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
define('AUTH_KEY',         ')Gd+&7U|?=%~;=Y$~&=i[NB%[p!JD}8l+k<|XMkJ#](sGQ+C(^R1h*o.6FDM(1,A');
define('SECURE_AUTH_KEY',  'O5=I3$e],RZ*$HO/-vLZc;LHyRe04q{6kYfx{y3B818+G]9;j=Ya.:Xv+HIchl`M');
define('LOGGED_IN_KEY',    'yo~@CX&X+Y@ +<-YmvcM-snCM,Q|dBt[[2j,z7bW/:S(d7?jE//]S5SHNm_mr5xB');
define('NONCE_KEY',        '3W&$8WPX*kxWl/~=a}Z<7zkwL@6DytzJX#c|Y=^cWQX[<6zl$W*|0|PTP*ey*6z7');
define('AUTH_SALT',        'OaNA$Z~A0O`=7E_;MF,wBSN7C4lS%KG)Z fW,+;%4/,5Xv9ibXk0=b#YBzGM*wS3');
define('SECURE_AUTH_SALT', ':>c!  b]9R_a2],(^3nF{Rn9CP/{a`tp%Jmtbh-$lBypHb|dM!Xfq$*w1>XEi v_');
define('LOGGED_IN_SALT',   '2&8YV#&%5?Et+3~k=(h~-A}jLzb+1f.C+H7iFqNJtJ2|Y)VutZ6kI);|0YP,g:V]');
define('NONCE_SALT',       '-`h47=fU8u5T))^{|H3|/~V<1 Zjw15ebLzhTI&W+~`Sd>3KIZu=-n<9QN^0cfyH');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
