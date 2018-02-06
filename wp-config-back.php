<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config-back.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config-back.php" and fill in the values.
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
define('DB_NAME', 'd2m81v5p04va7j');

/** MySQL database username */
define('DB_USER', 'txmubbijoumfqo');

/** MySQL database password */
define('DB_PASSWORD', '63d3e409f3e5f7f0009e255bb8845cb9eb92a787cc11dfdcbc54980e36e7c637');

/** MySQL hostname */
define('DB_HOST', 'ec2-50-19-105-188.compute-1.amazonaws.com');

define('DB_PORT', '5432');

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
define('AUTH_KEY',         '2v-$iVW<H9rb{#vvw)X39ZbTbbf0 [&>i_>@4`7s[,61t7r4t_?,N6W(iT{#>Pz%');
define('SECURE_AUTH_KEY',  's]vLtBo%mExztIS1U9.w[=&bel}S<&Q#bSeJ~gcUY%SCA:8Yw|^H->&aFrGou%Vs');
define('LOGGED_IN_KEY',    'YePO|gfnu]qH2bk&VBfqX#9?%&).*>9LZip1w?>QK6PNWk&o=#Sc{$1U:A`-{{L=');
define('NONCE_KEY',        '%D^{@#2O%Yb]7qNSdVV?#B!Ux:SGP}&/j.Iv t5^VWV>{$9sE~;8G$l{?)bGx:lJ');
define('AUTH_SALT',        'IjuGW444J,~xnzhh%O-NmPjf^,<5cP<W;G*&lVUa.x-YnatFXQK;Pl$/ZXGXR3Rp');
define('SECURE_AUTH_SALT', '*F]0#,mfykJiDh}w?Cd>D*y8m}G@Kh;I9X:eo(*tcvGTq]$%^R?s`R&daEIy^sV&');
define('LOGGED_IN_SALT',   '<ymqQQwbFMO2X>Jrl>C/deTUTk44HQ@uh7S,V ^&~?i&qL^qZUzB].?x{RRYBwUP');
define('NONCE_SALT',       'N!5^|6QM;-9!ZbrkYrg[3vcz4S1/XD:]:r303,M1.MWNXx-JEWY5,QyrN*^$>O3=');

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
