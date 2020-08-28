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
define( 'DB_NAME', 'wordpressarmelle' );

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
define( 'AUTH_KEY',         'a-z>W-]x1(/4WmOQcvkvHk]{!F16*vcb?,i_|YjML<nMP]T#9W,:ttv3wBva:;l_' );
define( 'SECURE_AUTH_KEY',  '^9cO`xO:5CgZ*e FGshfh>SUO8|c*e~1}a,Vmqa`+M8nhg==$)Cj]$6wybR#<jm6' );
define( 'LOGGED_IN_KEY',    'DD(G5 7Jb1s:s7Y5cG0B tz$L%&nIu2sPU&@F^V|;#uh$n3` prlzq%ffy`f/<`L' );
define( 'NONCE_KEY',        'kktUZH9VL5^T/{8snHayo*Y+,CmAS-Bb+fbgG4(Sc8~SZcaiZo{8$[+ZdK,P^oE-' );
define( 'AUTH_SALT',        '4U+l3;~lc]32krSz,{s,Arxm>[<n=~xt(fy0+m!k^{ Lc)e&Y<lsqvIsv-5c0n&[' );
define( 'SECURE_AUTH_SALT', 'H-^tH@z4G%Z1{LqeblxuepPOR!O+PYB8IJP%myIoxfN+tvA:I*3&}x8`:t)w>? C' );
define( 'LOGGED_IN_SALT',   'j@wHQ3s*nZ?lzZ_3N.;QS-u1;CymW;t;SX)l`660zk[>zk mwrh-=+J#!EIBP*t}' );
define( 'NONCE_SALT',       '`yGXOuuKy(P6gSCL[MQ6,xkzB=~/p0G/X a9(@V+kJ wP!!N/NUlq`&?L=>q!*wC' );

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
