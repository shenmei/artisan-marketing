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
define( 'DB_NAME', 'artisan_marketing' );

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
define( 'AUTH_KEY',         '+_|P&[#i{og9Sz)qX]bi6<bFc5i=N#Z58KOpA0cuKm)iJq1n&|vo;%uP1=7FghE9' );
define( 'SECURE_AUTH_KEY',  'k*M.0PT<J:r_)/2o(du=,%SLVS&NX+Zc~n@7BEh%u?t~[+b1!`$5]-LBD^u(H+wg' );
define( 'LOGGED_IN_KEY',    'jX6*7FUr[-I%2TcFKMHf&M+[A?F$+|c y^g)PFD0[q_!:95nyABCF-0#cYX{{;6g' );
define( 'NONCE_KEY',        '^KG9@NK>hh+eR0:^+6E[F5zqs~Pxh2m0HK6c)t%WwIqhj)85NdoZ+*&<7oEG%&$Q' );
define( 'AUTH_SALT',        'B;S`k)zU/V]X!PT/LG(</Y.`,[3%i4i/?Xu|MK{CFr@wvq5I&WLpD?]dImBJbv>;' );
define( 'SECURE_AUTH_SALT', '`]LY;Ca;a,47P5TBY/+vYY~2vF@c=/qO8^{FZR)c-Ixl>~=28x`-5jn@Cv=h1FPN' );
define( 'LOGGED_IN_SALT',   '}jT0{kG>EYLBQTYVy0<zOq@cWQZJ=CT3>yL6e@>lyQqhC75@kdq35%dC(M`0lYY.' );
define( 'NONCE_SALT',       'w&(i_AEYt,zHsMQWb*m;sq|)w<s&MFiXDS!pq%pkX:lX-?6sL ,ce;HGh?%mXk7b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'am_';

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
