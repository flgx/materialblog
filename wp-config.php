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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'materialblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ky%sgnaLuMKt|L8=[ Z8OG@R%^,FJ[tW!}uH=Fa/+nlNcfAq3p4el|yF]#y|;}ct');
define('SECURE_AUTH_KEY',  '~7W3l<2[kXWA_*M6v:mBZqihbh,!Y5gS0yj1&4Zh<RS8chNkQwUqa2JTjaSn7NsQ');
define('LOGGED_IN_KEY',    ',3l{.n1,Gi&UbBC6K,=k*t^~hixOSkFssz4)yWAl~_Fbsg3N4ex~7u7wUi#E)yv`');
define('NONCE_KEY',        ']VFJYAzaEM0)F4ID/izL.IZ];0<( 6,,%_{-H029vqEIl@.R~,o1d5!V*)!oM&%D');
define('AUTH_SALT',        'y!XXB&Ez14kI4mP ([I]+$u=zIs(egRtCC-+pG@iudeFQacY|YG[D1-SV_9k? T-');
define('SECURE_AUTH_SALT', '1KAV.4&IhGD7w[i!6@e_7V,&s80,gOq__9L|DKa+0|)J}Oz_6pf~Hx!sLO@C[hvh');
define('LOGGED_IN_SALT',   '5cZNyMJH@(PH]{*k+:jj?4CWyoX<3VOv^`ldhSjAj6x?_E?erL2SDCaSvxyBnxBj');
define('NONCE_SALT',       'gOZ/l}QDnn61[3ov}g-*~Ne>Q~Jr_*i$%dv+wk,~={RPXt!auj3c0L J@Ww]BcHx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
