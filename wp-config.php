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
define( 'DB_NAME', 'is_consultant' );

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
define( 'AUTH_KEY',         'eAn;u-#B#*>x6W bWS3mJUneqD%%Peykc ~RAP~Ggh`L8XsAO/>U3BPw$!j)KK@D' );
define( 'SECURE_AUTH_KEY',  'm gEko-1R8;EP+^5:!!4PHzsGN[nF5`;DHyzQbRr6@|urRcZ2afLM:2p0[n33pfm' );
define( 'LOGGED_IN_KEY',    'b,(BaFeoTdS?{DUcoL,f1(]6gyT7Z>Zw}@nifFHr8TL1.X#J}, <mYFeW:=nG0?n' );
define( 'NONCE_KEY',        ':voz7mG7LrvKvkL,{jqztE^NDul=6XTH-QNu/GKjNf`6;4Bxlq8K=JxxS.*&l-qA' );
define( 'AUTH_SALT',        '=0I;-Vz[xl(Eqb34R~O;L*Yh2w?4NJ-6l(~a WOi=aksI#G}]N>ExHGMge[jjyAC' );
define( 'SECURE_AUTH_SALT', 'o P(@[*znclbyoFEDz}zJGKOTj.GHHZ1^cYNGX-ButsstzY#.~Nq[hNH9iJ?FI3`' );
define( 'LOGGED_IN_SALT',   '%@Fn2FH9P]pF*I(Fff&f$qb6JSPh1]^8 MWWLB%a(O`YYV&vQrR.,bYRIsu)65|L' );
define( 'NONCE_SALT',       '0;KT3; &~nl-6djB([A(Yj vb[m$zs<Pm>A?-&jpvzJ2@6t4WUIo`EB+g7s]>B[i' );

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
set_time_limit(300);