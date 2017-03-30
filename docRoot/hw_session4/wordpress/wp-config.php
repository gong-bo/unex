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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         'J*q]_wA[Q(SBI`!+x!D@ImR<aJa<Z6O9RhN&Isb^;A?dk&7%x9!$n~3/|nE./=uU');
define('SECURE_AUTH_KEY',  '/F@`aH}EfauHahR2yTyV`Gr5a?yxi6`H{}$[g]##Th8?md)|GEZqyUT(S*p,q> +');
define('LOGGED_IN_KEY',    '6l5he DFUOsf}iXoi #uqCFh_u%@?jO2~)@K6N6w>G}ZZ~>4F !*<O6he[5BK:H~');
define('NONCE_KEY',        'lU|+P9OT?E^/>F^( k(nku*bJdF?P^Oh{I_Jc(L<O4)_YIQ,mP5:RlO} ;N [5@P');
define('AUTH_SALT',        'rV]a!epIxbcgjXTpLXU71}`#8wjYF4<i*C]y.JQ?d};3aE8`fenuPWV{|~<E80+z');
define('SECURE_AUTH_SALT', '2j2yA[6z#.zo0e$R~S(EwRRC.ci,9gJrAI@2F=3^v&J)/DS]`x<RKq%:D{.BaA9x');
define('LOGGED_IN_SALT',   'd8/,>PV@IzJaj+m,&K%@ S5xx-^q]ZI]?}o]za&d8rIKfQ$OL@ueaAury=Zxg)Z{');
define('NONCE_SALT',       'fRCev*h.3?XeL_me~.7Q7df20<|14TdZo[OR*hvhk%#E7QB0;gzBd+%IPDAa5bPD');

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
