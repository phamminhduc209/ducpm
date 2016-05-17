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
define('DB_NAME', 'project_startup');

/** MySQL database username */
define('DB_USER', 'project_startup');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

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
define('AUTH_KEY',         's#%@*;5w10Tjl3YS&d?1g1)Ml3-lDzvO/<&Ux>7 Pim~=EEsLK%y@{Bg^KU:EeNB');
define('SECURE_AUTH_KEY',  'oF>n$O6Es8QZ/s62uvcT^0vbQUY5m&0G/@4HL;P`a&z.8`ta_^OwU8hS((-X?k/;');
define('LOGGED_IN_KEY',    '*)L<86;J$SQuwR(oL$]:*m 3lBVrTXzE:>Qf@eDTHK:zW3T5CeTDeJiw3P3vGup#');
define('NONCE_KEY',        '(JO6-KRp7z[[ToWs|d}}ORpumEo5]Jzq+y5oH5&vY5un{dyXgimI`7-bwF86lNe+');
define('AUTH_SALT',        'XYvffb}rR<kh.-&KCm6fOFbonjY`K?33UQM]EWe}{X,{v.@b]OW_&oKH>nYi ekx');
define('SECURE_AUTH_SALT', 'Bsq!p3e$gW*zbFba)Z4tMFX/-^f46v&daNO@T:PyurD;pL_WdNf4(;4NM Ez?~ns');
define('LOGGED_IN_SALT',   'xy{}/W|N6FocB[1-/v0^i=QOkp;cSVveos2+>;V(?nYu}xG57{3j6GA<L}o+<Q~5');
define('NONCE_SALT',       '=15`qp%-$-5&j@A&$Y*Ha{T2| VU-#6ko1wl9GE$gPhIeLK mwj%`G6(BwD$Pj1O');

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
