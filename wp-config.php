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
define( 'DB_NAME', 'shtora' );

/** MySQL database username */
define( 'DB_USER', 'shtora' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'hE4c&$AZOmp~7h=>hmejx9<T] t[g,UTQ5VJknXJJ&nvK#;Pq$u%?)b/@RdM-.2<' );
define( 'SECURE_AUTH_KEY',  'P)3O%QO(,s0H`L`a)Gou@cYprWs9jj^Cv(Tk#W|FD53OnYa;x.rjw2tGOtk-:O/b' );
define( 'LOGGED_IN_KEY',    '[n!PJ=6+5,-&a_{;2%ug*|Bw2WR6^OZ7k0-s+@gsP_1-0Qv,A!z{7 m=/5O/VMRM' );
define( 'NONCE_KEY',        '+di|u37z9Hq9Zg1! 3Y+ut`e5K9,g,k:b.`Ksc1?k<atch[1*?XE~RZBf:^[A7N|' );
define( 'AUTH_SALT',        'jgS[}P1;HaGN3`>&mmH]oa7f;y?d?Las8%j:=NW`/$93~Nx}](3Q`|Qv39@-eThG' );
define( 'SECURE_AUTH_SALT', ']S[ N<r #M*0YO!Bk,Vzx.Z(h2h_%#oVN:~!T>|#Esah+,a0ww/qLK}I0y{U|6[W' );
define( 'LOGGED_IN_SALT',   'AxEx),fU#jYu9CTbt$]6sB[`QUAS{qY7y9am$P#i3i _QtO[<St~0cL@Zb[ajSrh' );
define( 'NONCE_SALT',       'dc+*e)H|8z{=+sC/4QJI<p]I{ahWThTEa4YT8O+oY<P93r(gG88RB1jk`(l43VKF' );

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
