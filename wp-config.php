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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Cnews' );

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
define( 'AUTH_KEY',         'Hv:ix>d}B0F,5nXI)X#[4Nj>-I]nB8S?DR/sS_J5!aZ=o&N xE_^Etr3m]Rk^4/e' );
define( 'SECURE_AUTH_KEY',  'k$f(yGw1N*I5K}5x.R`*QhQ{lFgA;d{;z$$/-vnvw6}s7H?_3&ht_w/`%KQXi#~L' );
define( 'LOGGED_IN_KEY',    'sz/S4xqiw?(d1}W([OVg+jfsGMp#P>y$t:Yp2zmgeMgr3:EG=<_64hPxB|lU-KO`' );
define( 'NONCE_KEY',        'MVRB4@PiLxW0,G=ajIR?^u1BxE#(f>djQz0Z$}E;Xq#Bt^+8}4Eu[P^V/3iGl9co' );
define( 'AUTH_SALT',        'Ui]q|zY8E#x>c$1(jQF!eV]8gDw<?-+sI!3|$!VUZzGa;q^/g~nbavU Q8+>bxCl' );
define( 'SECURE_AUTH_SALT', '*1j(i;[JvX+ ]Bl|57q%,tdz(!)a :W]G33tKxfrS$iK:KQx2xl.57;Y!XTv!v%-' );
define( 'LOGGED_IN_SALT',   '-* ?m(;R: :=xN7P PGKD~!%}%,8hu48%qggU8hk74sWtd(2qj,{dkny:|227L0d' );
define( 'NONCE_SALT',       '2vHleZR6AX-h?!}QOGI7#$eeQ{n=$O.@$.a&>~d$77 /U~A#jQ.m=q>-iyn_{O.Q' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
