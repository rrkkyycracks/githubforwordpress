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
define( 'DB_NAME', 'githubforfordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '**n4]!Q4{%R<oJ#&;vPg7.gY<l8dRJb:{&4`rKNT&B#zyXa0i4^26b?*e4Awowa]' );
define( 'SECURE_AUTH_KEY',  'zka&Sk^ &1!y~ Pcm}VNry,NGI=0d#k%?$18J7wvw,@6<FLFl>hl64[SXW>6:HP6' );
define( 'LOGGED_IN_KEY',    '%r&{W4{hH1>|4Ch*|aS[v(ee4% oP9{R*<PBKx]Q l+nI2]vvMgT3B6a6m=CgEPd' );
define( 'NONCE_KEY',        'Jr5R9YGPz=|T1dDseibUD4yRwNT>>Sj&ruh2 pLEf<d|Kw^B@.ig;4jO[#lU?(6#' );
define( 'AUTH_SALT',        'K(Yk,64cPX6,vLz;{;BBTa4Ve?O#P_HHuo[UtN~G=`%&~&$0x`+%[~zID`Q-i}?8' );
define( 'SECURE_AUTH_SALT', 'v@6kS5_ kYATY$?%T]WN:%PDr/]mORTL3ImK=;BE;Ad9:hcq#-lB0T %`3qFJX/H' );
define( 'LOGGED_IN_SALT',   'W=zKd:h]Y+_pTJ{.gFd~@H3?K9Oi&7dAM7n+0G95:]x>xcZj%uzr0gNK!e-M PgQ' );
define( 'NONCE_SALT',       'n*a<jc3K$K}OoL&F^LFoumd$|r8vy_#OZ{tuMZzRwz}9TXN=;-@dl@Ak~eF{6sa^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
