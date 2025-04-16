<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'UserT' );

/** Database password */
define( 'DB_PASSWORD', '1A2Z3E' );

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
define( 'AUTH_KEY',         '9 [1@~{9U>h66oa%~_6|vu8N->.<A`K/=P)n8>#fP7j@-N*JMIM_Ca&mMS]d?d2e' );
define( 'SECURE_AUTH_KEY',  'RdX?$#B4|[$/ nSTT&hQK$%Gm>; %U1re*qVk:0o8,P>nHY]Jwr`2`W4smktZDM>' );
define( 'LOGGED_IN_KEY',    'W0xM,JP *&6nrzWCeBk^Gd!*&(=4A53(wm`Qr`GfNoI96`pbpAu0PL,gE4V#0u=u' );
define( 'NONCE_KEY',        'N[y-*cv.*H[6(my!JB&j_7j^okl2LH/[{-= v7=Iy6k=![75-x JXTBc%tkhhB9^' );
define( 'AUTH_SALT',        'i@$bJ7qAU//Hz/rER.HxJ.^8j{z!i|SE`6c}t5ZbzY+heL|(E&- Tu/9~0OiGi~2' );
define( 'SECURE_AUTH_SALT', '1r.T*CS@Li#-LZ.EWE.>8*:=/ &jo^/tG^m8Sw`*ThVE1pV_>BOS:L^Opal}@*I+' );
define( 'LOGGED_IN_SALT',   '0ZLVb6ggYvM~tapg[|x^;R2Z7kK#J=h_[dzP_,P%EUX{:B-hUw]zG1PeV}C3^oQm' );
define( 'NONCE_SALT',       '%e?Q8>H1(,Ng..*[n8:a_*rGLO{Yr^p-Qx`If1ro5S( HbKBV;o*7$D<S?d~pqS?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
