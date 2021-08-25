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
define( 'DB_NAME', 'jcc_wordpress' );

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
define( 'AUTH_KEY',         'biS<%h4G]#%,#srw*TO%gYuW}{D9cF=YEJ6JN5yDvO}AQ`P=`M$}t:/)k]2.Hn3e' );
define( 'SECURE_AUTH_KEY',  '.IA}2,ERw7c]qNd_O(.aslULFeefSkowsm{tU2-ebQhUG?8]~t{3,-GcykJ|{26z' );
define( 'LOGGED_IN_KEY',    '5CnS8N_?%GU8a>~W5)@K=|XJ2C$%hu=Txe%&*cEV$u5:|q!*YFsC;Q~hiP$Y8</_' );
define( 'NONCE_KEY',        'Xr)[V:CZ|0noCjy364yH~af(WKcwCa1,-#5;4L=+g[UeI`@G]o+aVVYEC=)tSOun' );
define( 'AUTH_SALT',        '~HktMMC~NO~c7KEED3/)&AtwM__|:S3iZ)R:7TZ?::)7J{Aoct8JIZW:M]Jgq%1~' );
define( 'SECURE_AUTH_SALT', 'JN _1Otos Dw*XxmX:SV2=U{d v],Z5ytJUcWa`N29m $MIbbX+j&h4Hx<<gNoUO' );
define( 'LOGGED_IN_SALT',   '}RmC%:w9uAA7k03n}:HgU@ ,Gm9X!+ulSMfh8H[Sq/Fu[a7; b^:_x@T^T,;%%Vk' );
define( 'NONCE_SALT',       '{S9,N|am:*|h736Jh[l22q-J0l=p/4r]w|8Ikz`G i^3Z;tpFcZC_4Ot<SEj`^4a' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

