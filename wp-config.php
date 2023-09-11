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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'z}xbm}vIbBi.MTU#o;R%OfE1C5v+IZ.I3bZmHw9I 6CTQOk(,Lgj6~#=5Zvk{vnt' );
define( 'SECURE_AUTH_KEY',  '7fzR4w#>ypSEnmy|<gm!4&F(MKhjEsz ]EqHH(-OEZ.XYYIwWqmG1 /shAc10wvW' );
define( 'LOGGED_IN_KEY',    '&#=Wj1/{D&$?Y:pEzNjv~zqfPm@Q)9,(u)o:[pYEU6:OKj4QZsJL9%#3Ptio.Fj:' );
define( 'NONCE_KEY',        'Rm]0Yq7mtIxVcLm;C+-u^8l%4gO>NzaT`=O[]7]9E|97./JFev+3L>!f(hXIyI6}' );
define( 'AUTH_SALT',        'O,22c:=$-,)QfWVEW;[{l#XJgz&CCXfFEnOe#>$e#*SI{p@[<-F5d6fv/78V!ON6' );
define( 'SECURE_AUTH_SALT', ')H5^oNa?Y39ItN9G+jTpj}C[;&L+xp:ru`1HhZ+^YGjx`HDF;+*RFs<X5Kg$XNpx' );
define( 'LOGGED_IN_SALT',   'Q<+_>k9T?aHl^^M288s#QC5W)z{*r}8>cp{Zo0J-.5Lq|1-dttn,Sw35kyz-Q]w[' );
define( 'NONCE_SALT',       'R^YhS%~3UR1X$1H*?{O;AT!WY=Y5vbA:ak=W%5kS)^pHJYyu@2a|Hy1.h(VOBxY ' );

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
