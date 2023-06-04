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
define( 'DB_NAME', 'portfoliodb' );

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
define( 'AUTH_KEY',         'pEQ8x/M1N{GHF%sZOb`D6-?;g_E|qQLA>Y.~Sp.j[)wiZRl=;T~5N9I;WHp*Q~K<' );
define( 'SECURE_AUTH_KEY',  '{F1$XgWIoUNyALL3TB~cfE?89J(gCgC8<~,nJxDOgeDmkd1W;0#g}(^01psAJNqb' );
define( 'LOGGED_IN_KEY',    'm%rrx^tgl4=JrIYPh)QAI77=r;NPi<fZH>H$XA4AUPYINr%yB,PdgRSUI-u*]mdF' );
define( 'NONCE_KEY',        'S~X+4P|vfa=BU!b(}Xg:,s<E`i/t(9<K+]~qn9o1^;Xh.fwNPI-%q`65_6hwbLhs' );
define( 'AUTH_SALT',        '5K+B.B0Qr,dTjE#Y|6-gOTxeuV6i>>S2Cc9@7}@p+ZZyK{D:!v>S-4DmN*@^#?Uq' );
define( 'SECURE_AUTH_SALT', '`N.C,$/Ioj.P*8L.<k[p;IEam.nl(Bk-}A!`}7x`46R^|$+zE[#xCC?vz~ad-)VS' );
define( 'LOGGED_IN_SALT',   '>aq-/)T*<$Iduj.3x0@q8m4+2jE{a2.Cq^iq%]DP9m8zHy5%3`,P7J7D(`PvG3?%' );
define( 'NONCE_SALT',       'F99tru^6:pf&n%TX^s.8$h]fStA!j1XXny[$Cs]N@?b(eVe0XA;q,Ba[fVO|$>@)' );

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
