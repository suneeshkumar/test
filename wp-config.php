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
define('DB_NAME', 'sun');

/** MySQL database username */
define('DB_USER', 'testuser');

/** MySQL database password */
define('DB_PASSWORD', 'redhat123');

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
define('AUTH_KEY',         'wyC28Y{I3BSA~kYpqcT`t2x_Pes8/=o/-ezm/~Di)h`nSCI@O9j;jeoLT1Kg8`|p');
define('SECURE_AUTH_KEY',  'sd{CwRnKTt>!cV}OpR>G~e0lN.nRy!#;DsD.vg^cb%h-FXZId[1[Y!Ae}^u(SJ!D');
define('LOGGED_IN_KEY',    '$2m;jy&`bmNLc!sA[Z+$a.GP`=GTh;3[S<01n6Y`Lq|HaoFJkwN=P%.o7(`q])2z');
define('NONCE_KEY',        'vwE@u62t3S.qPU.c+dMZcUUAT%=*APHeH~C l``OH`omKVst8?YgTJQ7,lNH>/)L');
define('AUTH_SALT',        '*xn[?u@z^(V#B=KO^4Ta,IQ.<_H6bweTP)L2pjnhjDn-knTtMa0^[><_cM7y18&?');
define('SECURE_AUTH_SALT', 'iTS{h 2X:Ef`u_1uB2l&VSXp]<o]VrkMXPv<h^ojmC=l5{,hbr03IO- Bz7mJ.-w');
define('LOGGED_IN_SALT',   '?H)Z)&n}=h`dJMvKG$=hbCfPOgbjkb#uEcS5mx3KRbMBykR~w&1[O/!$w=)iel1b');
define('NONCE_SALT',       '5GuF>UA?mfW9H[A2@ ^8ZX7Y&l(Lv_chJ&c2_FN(<aUVbDnmPfH;sl*/6JHIii?2');

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

