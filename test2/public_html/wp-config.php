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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test2' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

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
define( 'AUTH_KEY',         'o.L[N&Ph>qRZ<u{Jh)g7$Cy#3FDQ5#i1u.d)AGnq-lHbJ?+rodAK?65nC!J:Wnnz' );
define( 'SECURE_AUTH_KEY',  '&6v=EX[z#rnJlv.8amIw2Fy<]UdT9.,[F3ma=7Q=6:]Asowz9FuEtN^YThKS/t%*' );
define( 'LOGGED_IN_KEY',    '}n4%t6)Funf*%f@Bi3md5!ZKQ#v`d3y(<+h(-9t6EE;,jUr|Qvr8]9^EHo!2jlF1' );
define( 'NONCE_KEY',        'RGK/W}lbFN<q/rd`&BSf+L4mE;^@eR#yKV/ d,hjZ@X[&J5y-#zM+M{`wIfo R~n' );
define( 'AUTH_SALT',        'rv4>( ( I3f`GuW:NGnhzS/!Z^bR8ok<?Z-8*.[Y9v9MM%~3*>JH),uQSud4=F)T' );
define( 'SECURE_AUTH_SALT', 'W>#:fQMRS95ZpdGdTTyH):6R2T.n7bb=THH$m3**K75ICf^:B0`!P<(G9:nRyCvq' );
define( 'LOGGED_IN_SALT',   'X*0t3K-#<_JKKr[OTPg@0ZF4#>*6$0O|{3CL&,_#s{)*rsBR4))-}8?5GRqK<R}/' );
define( 'NONCE_SALT',       'N4XP_F!#4fX_-_p4J3jn, ve}-%)]gxb+Z:iQOeRe>?d]P7YtT$lBJOW!-r?0`Iu' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'https://test2.dev' );
define( 'WP_SITEURL', 'https://test2.dev/wp' );
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'https://test2.dev/wp-content' );

define( 'SCRIPT_DEBUG', true );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
if ( ! ( defined( 'WP_CLI' ) && WP_CLI ) ) { require_once ABSPATH . 'wp-settings.php'; }
