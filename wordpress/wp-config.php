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
define( 'DB_NAME', 'sport-island' );

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
define( 'AUTH_KEY',         'C|6.5(Hs<.)*41GB.p!`$85nzQp[>MJs|e=8(&1Tz?8hsU{-_.gj^GR06. AL%Eu' );
define( 'SECURE_AUTH_KEY',  'g<)T^580qsc1Vg*.LB4$Omx]CxTW%i&Hns~:#:TWoI6T0%y;StsqxRy?*-Wti(_p' );
define( 'LOGGED_IN_KEY',    'IDK~{e{x|vrTr4rDu0?9TLd^Y;9HH1&4I[Z1FA`~yFDB4U.?qa$=mu.[EtZV4%*Y' );
define( 'NONCE_KEY',        'H?#E>,]Cy1=rSiMBk!(~8aQMbW?}0OROy16.fM5B?J{-fPK+fV*?#EqbNS?9I41L' );
define( 'AUTH_SALT',        'LwP@hT%b!WJm9.!vORz_)cr<JTOdQ1t^vocEk5WiS>e1T0qbK!M!XP0yhz_b5HKh' );
define( 'SECURE_AUTH_SALT', '3;kb>x_5oy+@lx=2aLHhaMCgDpaXxOeRy&+94^m1q*j3|XSUq~h92@A(7jb]&z?v' );
define( 'LOGGED_IN_SALT',   '@s2RI+Q@*udKxMLT>2N0?Y}OqVG%uJ^$mgFrn8)XT?2g90nl!=^T.a203)*FF<Nn' );
define( 'NONCE_SALT',       'w3{3GSW*lSq^,[ikp@&Ps5UloKdms0?{.ycgg(RnETU+|i|/-PkqYEsH.[k]Q|%I' );

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
