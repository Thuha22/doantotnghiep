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
define( 'DB_NAME', 'doantotnghiep' );

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
define( 'AUTH_KEY',         '6)t(|6[%.!FGIkaIg,4_u/5Eih7pq#hMjg6sa%>&|!@-KSiZr,jDgU!):5!?RXAv' );
define( 'SECURE_AUTH_KEY',  '-[*TVPqR9F_UkA1cI>t>!eUj2^@vz#l?!$al)qR`TA|NwNkg~nl=V^c:-)HGlBDi' );
define( 'LOGGED_IN_KEY',    'cO(gd1v3/(-@iS/)ko[aJM}P]hg+<;5+Ngh?HCW(o&u;.3968Z,U;3k=U):$<k&(' );
define( 'NONCE_KEY',        's|l9S%d<w)JR|eJ7#6ociN6u!Q(];>gX`0`DbdF}ov _h(#_A AQ8gHfLsgeIFM;' );
define( 'AUTH_SALT',        '`>P NU[.^fMKXhv5PY!q+:.wEQ3j*cvO;29pmi-82I[?U(%(~ZJM4+7pvB[an,,m' );
define( 'SECURE_AUTH_SALT', '1v(O(`Y2C%H6)qv_g0ma$WDlcbk]F6HsONODw8g/FHcX=&)s9]RtT@d.;<xK*mep' );
define( 'LOGGED_IN_SALT',   'zDa/yr;RZFReT>wy!FX)-d1u9I{ms[Wx`d<Hy%5*U_$_qs0983;WL,fq,$/vtR.X' );
define( 'NONCE_SALT',       'c9-$@lcdmH#RaOAxhpUioM 7G-){Uoz]yZ.fk8o%r~aCb-r{S9o|Yz:qZyrAT:A:' );

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
