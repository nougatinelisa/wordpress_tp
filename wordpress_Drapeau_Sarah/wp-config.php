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
define('DB_NAME', 'wordpress_drapeau_sarah');

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
define('AUTH_KEY',         '_%dozL}gYp$Txk3ku(E0AGpZ`rwZ.@q-&qMMNt9*J0{2SM8^WN-^Vz@M/hnP6$-#');
define('SECURE_AUTH_KEY',  '0R#woje>VMgL-YjmQK8G6s8R%Xs)p~U?nO]}O:hcO|8d&VPxk=~<r_i2qP7~/Ore');
define('LOGGED_IN_KEY',    'D*d2Sk:md6E:hqj@2hUl)a#SE%Rigw?Jl5I][p|8iS=Ru~q&D0tAScLXc4C,J**O');
define('NONCE_KEY',        'T2^ipIp7lm`RpwEzY[I[>R]Kqmf8X@}>g`^Tn.n;2k1kl?bjC/gevuU0XjGuZ%%z');
define('AUTH_SALT',        '!P/a2rgYk~}}pUn*g8#ceY$Iw:HY]2IZxHBO;KWR8wo1/3Ovo*Kf42T0LWfinEM8');
define('SECURE_AUTH_SALT', 'Oddy3?umS=xT_>/7p!kRJeE4EG}SDS;lyOZa7b_`9cjW&Ne 0{d9>PnPMw2i*0S;');
define('LOGGED_IN_SALT',   '0)(}&0y65peQ#,rHwUl#j!!uCl0BT2jRFD _zJ-]a{(B3Z5;%D%I63/b.,7NR >F');
define('NONCE_SALT',       'p:ZD^j@>3SGDa:(90t!8/jG6^9Eg`>wS<zXD9Ly^@;r>dkf%U9Kignz+mf_[e7i.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sd_';

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
