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
define( 'DB_NAME', 'csw_m1_kamga_monthe_steve_yvan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'er3V>CFw>Bd *h-ryPFWthwhw$$J[.r@{O-XZ$_l Rvyi2,T`cW:%b1hqtCXIZ3U' );
define( 'SECURE_AUTH_KEY',  '3R.q( Wa2:uQ;2@D/pcT8m)f;ASU_q#qXrENtSAa,:ka =I|={~aex48Szj|)oTh' );
define( 'LOGGED_IN_KEY',    '*:KeGgqYSo.`K!u/Yulew<DF.rFRkgMPJ(RcOqmRLm3?cS I/Ml(!),-.@f.E(rM' );
define( 'NONCE_KEY',        '1T<t-{Ta&b-uIS))Se0HCki9%E)4SwG[w;MLP;>r$b6h|h*Fq!4:_m(g=dK^u3wo' );
define( 'AUTH_SALT',        'IgerB`^+sK1E8)m[&3>*[z|J^ffoiDv_+d$J;u5#wWm4Ceh.8Dy<-(fqz GIWye/' );
define( 'SECURE_AUTH_SALT', 'mJ}+ue E 0B%|QC+WRbh. _]J80r^EJrVcH y67=_hS<J%faB>2izFA{:k0eB;8P' );
define( 'LOGGED_IN_SALT',   '(-Hyg@p:MhU0jZ?m1]BEw|L1U22<gIsBlcldzoj^{ix9!)VY Bt[7)g%!Jv8epRO' );
define( 'NONCE_SALT',       'z1 AcI~M&|Kd(MvW%K@Eu=D<Mm?`RVjl:-6yjcZwWy3B4wn9x}SYWxqT3 |)bgZB' );

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
