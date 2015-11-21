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
define('DB_NAME', 'wp444');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '}zRG(&PdN!X6BVi][iZ6|w|:C[iOK;_$fe&+F!yh4bxlt$]*EDz5v&XKQXVHD07T');
define('SECURE_AUTH_KEY',  '!/_*3Uj{sL<bS~#&+/7a.ui$Oiqorjw>M%)Bfc5CWvT%Kx%Z 76c,|=*75Mm>zo2');
define('LOGGED_IN_KEY',    'w8#~oa[x9+xE46nO49B#o^f+t[s6h,G64J~OAj/#lw]I 1g.i7/LQh(L+(.7#DF7');
define('NONCE_KEY',        '0$@MP|uubE|X30xI]RC[0_z7)&&=4ofSI?&|q.|#36!+kZZ<K bS`&^-sWv9DbB!');
define('AUTH_SALT',        'iCIkf_?WAqB_oO)]}YULb!L~{Rcq4`nRa.`V_@{+3vOyGZ!4Fq[:ziJTC%a,G-E~');
define('SECURE_AUTH_SALT', 'd}pq1eT>>H|DUnx{&04s90=hR5%f_:Yx~N]uLmU*7*/^|W->-8Ul9[>Na4MP|iN5');
define('LOGGED_IN_SALT',   '.q69CoJg4i/$7$3CE1lxB]N`6tX|RVvPl>n|EM@,X+^nBze4^;:|WJ0T31*wJR+k');
define('NONCE_SALT',       'fRX-uL|AYafU|(Gg6{fbzssNZ3JFk/+[3VxbIwN`vm|)r.SRGmwvx#m)^|w7V->L');

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
