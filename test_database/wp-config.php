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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Bl%Bk@X=h|`(zJLvx!!P6Pz7[R]uh]%,.IYEoRl#)K?^fC~Shl.(RGe0&rb~1?gN' );
define( 'SECURE_AUTH_KEY',  'H#n^({7{}5l4HK+sfR^0n8I b%.JYXI|s0Kk!e{JPkMDVF-LZ+-aPp@LB=_h_w_8' );
define( 'LOGGED_IN_KEY',    'q`~@9(fY6e{3%AZAJW$}{C2P?tPkI_lis$urh$?F#lG!M@sjVl)1ve|i!)E05}L~' );
define( 'NONCE_KEY',        'p5xYn6bjb{BKYom-wMut^#+Hurn58T1cat5Xoa.@%Q9w{%z<saJM.]Zm:MLL2MR>' );
define( 'AUTH_SALT',        '176-X@({p,GXBm2wqWmq9~_%iH>@K58wV~O-,{#hG&pm)]?OV+mSG7uxcQDGqd?*' );
define( 'SECURE_AUTH_SALT', ']%8>Il$m(IkSRQPt*>j]Mz-_-4i4*K)n^(<Zh;CS8$O%cAoKU~G2<TGr`I?daa}V' );
define( 'LOGGED_IN_SALT',   'x{O:D`#HHI23:gE&hMfUF<N=<YW.7p->Sq%(,-kgA/o-w!JRz9v~[~y,P0!6AfY*' );
define( 'NONCE_SALT',       'X8#):V%s#)Q?/4BaD59JRv>:kvpHsu8uyvj2H0C^SuZ^NZqUB{Z<-A,8LM@E-3SJ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
