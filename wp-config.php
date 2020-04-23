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
define( 'DB_NAME', 'irpublicwhip_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[eQ2PbOe3WFH;4wD*WAXc/S/Db]/g:K]%{>:x>J)<gW+OJu:Y-pOf,P2r>Hv2;H:' );
define( 'SECURE_AUTH_KEY',  '3E4vX_|-0Mi?.WOex5If`e8Jvuq$%m}PRD;nO!@^U>r,(!,vvJn]EuIH1q1p@[b(' );
define( 'LOGGED_IN_KEY',    'T>|+,xob&b&|xv{c08at+AG*I7((?`Isn_o;6AZzpbT&l:]+;64q4T`.cBVkXV]p' );
define( 'NONCE_KEY',        'l;U6:bTxkNN^OO`urQ-Mc,da*}@m-UToNBze/.iQw[(R?i;`pL?N&VCvvnxy@#7A' );
define( 'AUTH_SALT',        'cy`IZ,]uEa[|sK2wFc%3.qM(TBQuhx?Sx Rmrj?4I;b,ph^?nATg@U?:YoN5v@_C' );
define( 'SECURE_AUTH_SALT', 'bVfKKdV+7mZZAUa&Oi,.?Q)@I|#>,<lIFDjl~ld34jIqL(grPWj;&5dMrmh1`}n8' );
define( 'LOGGED_IN_SALT',   '`,4/cR>N0Z}:<it]ccUGw^C&&~5&twO.UWLh2fH m(XMZ{~@OYstA(6MUv4C/i/0' );
define( 'NONCE_SALT',       '2a3|Rj;rVvXJ1)/Z3!0e]AC/s+uR=u7t`q_-1jh/wwh |K8qECfZF[,JEM4,uRHH' );

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
