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
define( 'DB_NAME', 'car_care' );

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
define( 'AUTH_KEY',         'iDW(5U}1X-{4K/[Ef2!p(hGDd 5X /c+MHwcq7QO#zmL_|Q0|pRbl;Ofdt|2GVW(' );
define( 'SECURE_AUTH_KEY',  '> 3<W)C3pIX`23*<s-9U]eb-os(:_s@_]NF+yP;e-~XN9Z9mB?jFPX|L3oVp6:nc' );
define( 'LOGGED_IN_KEY',    'GD]|n`riw.vA@0j%r#{?3B|pJ}UfK7t43Z*S39=:N0u@x5!|`v3Og^e~O!g?w0(X' );
define( 'NONCE_KEY',        'd-|,{ZrV)c6&B{d3Q$fRW0:g0y0Z0S@U9`c.`u#XSbwW;$qD!9e_KvIWFh]V+}=P' );
define( 'AUTH_SALT',        'Mm0K88r{d&E#9$]qxJ>n6i3ZLVGf)-Mz?*8>r-9!#TCJRC.qLFB$OewViY4K5M8Z' );
define( 'SECURE_AUTH_SALT', 's G1.%Rc8WQ@1$KKbyCB^o#8hf721Ko9&+AQ!~;/0<!EnL~quL7mJ~OmRFSR(*b>' );
define( 'LOGGED_IN_SALT',   'hbCV5)p9Pzw@{PM2}1}U+f*/XeQ@|b4QLCStiURrSywHHKITtu(p<V@:e[ZrwO!x' );
define( 'NONCE_SALT',       'n5Qr1N, zgb`3z a<xpQB]`20)_Q]#wqPH]T16:_##pULpC:4g9oK>bFxo:eM:Nl' );

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
