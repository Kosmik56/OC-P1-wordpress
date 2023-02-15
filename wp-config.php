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
define( 'DB_NAME', 'chaletetcaviar' );

/** Database username */
define( 'DB_USER', 'ChaletEtCaviar' );

/** Database password */
define( 'DB_PASSWORD', 'Hwo8sbkHIaqfzvm1!' );

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
define( 'AUTH_KEY',         'z5$DP{2VhhQY{s83qTG9.o@v.pN<F7@<aEYF}6{,]*m[o6c`&BanL*P7Wo-Jq|p1' );
define( 'SECURE_AUTH_KEY',  '|utW,u Xl;I0Y6&-susnE`e[K<};O[O9<c63IUVdCe wrcGY4zzLyT0}mQwWg<<9' );
define( 'LOGGED_IN_KEY',    'oeyxL7N[CoywLWfz{K!xPNK?j44- u0|Ij:W@<;ZjoAE&h`aT0cEX(VDNbUs=2Jp' );
define( 'NONCE_KEY',        '-@Q)Crw_r9&0Gl?5pSZp.zrNZ~B|Fb![zrrnkYa*qhl@@(YzS:9r2x[98: .DKL5' );
define( 'AUTH_SALT',        '2,ERP#V`?P9&B&PUj[Uz$I38l]VgRNe0;BvY%hd2Q qz&5>@{_}|HGq?Otqb)TwE' );
define( 'SECURE_AUTH_SALT', 'VmXF`];Qq72:cKI[CKZTlH&h)Z)1;^G }iuLv^0t(xi](87J%u]{7R6iui3g1K6%' );
define( 'LOGGED_IN_SALT',   '=kv<U4<E>qscy]D:d*,MV+g^1^;C&-2*@9^Mich7~KUWr4^#WGs_R/DcBnh=ST;c' );
define( 'NONCE_SALT',       'jBdBX<j90t0q&y[yHsI%X3_7]}V@|vSG^`^3oAY7@sh}D~Iyzw.v)F=~VaR>p-wv' );

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
