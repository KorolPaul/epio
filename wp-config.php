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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '76c0666ec20394370424028a2f67069b');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`3@)iFQP+]EG;,dMF/Y*lCBwX279P-g|0jefHr(Fo?7z)TP{31Z02.;QvW&5%2-q' );
define( 'SECURE_AUTH_KEY',   'Mr:%Qz|%_*AXNk!6gv0fKWkCcx}5<&JM2>7Jn+f6J}P$f`FX{E%39h%j%C$.mS2*' );
define( 'LOGGED_IN_KEY',     'k0s;(|,m{@.gM72iUj+`[<[-h*!_Iw#CAiT!,)M(6muO@/r4w9wpl!$KOI:]jMsZ' );
define( 'NONCE_KEY',         'cd&A.M7|;NTIIA_w%_vHpCUg-+Re@$WIo0/Lh3(!S.EX?3%@7]gIa(O!*2/eSpm(' );
define( 'AUTH_SALT',         '$]x`clo=!3%.fOaSDyBmo&AqEp*l/()oNNF~ =`xT>Kxh1- .01>M;&S *aJ;;5c' );
define( 'SECURE_AUTH_SALT',  '++]GUt2!lLs]8j=H8yx_Q)K!@=N/Y]bxnKWPg}01a^0[D)?Fr*]<1b~s#|BANvke' );
define( 'LOGGED_IN_SALT',    '@T.><l+F7pLF/|9%lUn_66CIK fLzn~K>!|Pv{coDazV xpSN:FvT>g]~#KV6x)+' );
define( 'NONCE_SALT',        'Y=/8t u~YIp<|oCl;Nl$!qxD#C~-LT[;pGrX4vW,)ZNL=85@*r&?Af=@Y:0eP@Q(' );
define( 'WP_CACHE_KEY_SALT', '6|$xzqZ1vnZm?jqM# j||/ yCl].u*6yid<|wARArG/ZO;QSv)/fg6F6sSG&vEU(' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_CACHE', true);
define('DISABLE_WP_CRON', true);

// WordPress debugging mode (for developers).
define('WP_DEBUG', false);

// WordPress update method
define('FS_METHOD', 'direct');

// WordPress update policy
define('AUTOMATIC_UPDATER_DISABLED', false);
define('WP_AUTO_UPDATE_CORE', 'minor');

// Workaround wp-cli issue with unset HTTP_HOST
// For more info  see https://github.com/wp-cli/wp-cli/issues/2431 &/or
// https://make.wordpress.org/cli/handbook/common-issues/#php-notice-undefined-index-on-_server-superglobal
if ( defined( 'WP_CLI' ) && WP_CLI && ! isset( $_SERVER['HTTP_HOST'] ) ) {
    $_SERVER['HTTP_HOST'] = 'localhost';
}

// Single-Site (serves any hostname)
// For Multi-Site, see: https://www.turnkeylinux.org/docs/wordpress/multisite
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
