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
define( 'DB_NAME', 'jcc_wordpress_ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'tg6f5X<|Q&@sZHMfF|Zd:m30}A.&*+HU;2_fTd6{vrg@(LkkF_A4V/GrO5!dkm`H' );
define( 'SECURE_AUTH_KEY',  'f$v:XK;B7.QfAmEOkJZm-)carQ>G^TJK%:,;xx3Zle36}/ug*(uH:n C=GzRuj0g' );
define( 'LOGGED_IN_KEY',    'okil6}X.p/9J7DnLy(y@goW?/T0xe;16^G[sT#nzNRC8|m&#kSxR`:GZ!j,Fk#1C' );
define( 'NONCE_KEY',        'We->f]G:@|`|XKO1Q2 uzP).g$`[@%S$?mQIb}O6U/v @(tgbtC+DO4Kc*;aCcQ|' );
define( 'AUTH_SALT',        '<o}@RcZ6XD4?1:^d)3zl%H%-gwey?{z;#=`.G1/(k?mkyfIQC0BA(oKgCjr+9E1d' );
define( 'SECURE_AUTH_SALT', 'dR~R.2=:5uY |I]]*&J=r2YA#TJeLp%W/eO~?$s@P/b;}51;<Iio(p:a0Ff{lkd~' );
define( 'LOGGED_IN_SALT',   'N?V<8jk<ovX}%Y7>#D$Jr/buZ| C &_u?,;wlHcv2jyjwWg,R&RAW*yeez^],Ypm' );
define( 'NONCE_SALT',       'ivR`V%mhvyPLU@} 4!A{G2iH#6ZY{iJb+5%pt@:E5-YlPR iOGUk16~#MIh}QWkm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jcc_';

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
