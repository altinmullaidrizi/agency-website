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



define('DB_NAME', 'heroku_ca5e70d09810e69');
    define('DB_USER', 'bdf404bf020150');
    define('DB_PASSWORD', 'd5650daa');
    define('DB_HOST', 'us-cdbr-east-04.cleardb.com');
    define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         '6-d:zr3fXX/[.[4rOD]z.Cg`<_Z-L]+ F-CtDob4unKkq<k{m|aai:1R,ZsW<`R-');
define('SECURE_AUTH_KEY',  '@AR0]G1xpr$@oA+V^-aW8Hs)F+X^{=.&pRjMbv{-[$`fFB1x,-l|Y&oO!)h^m1,C');
define('LOGGED_IN_KEY',    'Ma&Vx!*P@:CJ-DiSG`u2 }UgeE7KjRxv<|NF,U&%nKjYL1R:a2a6]gKcli*SZU)u');
define('NONCE_KEY',        'W|>a<ua7Bn@p,m2c|MGqPJALA$l}|^c<}CoS%|qNsRy4+AGY=|l[+ArMgb}Np-J|');
define('AUTH_SALT',        '(!+]?Nc1-b^Su(9+#d]j<Z+$1$SdD_X$b5~N|L 6]]q(5!H!*[~ZBJ$7BC)yrSvw');
define('SECURE_AUTH_SALT', '$={Q^`k{uo+r}m+I#Ienif828L>G|MBy_<HogYaq rrw|f9iSN:p9M1]T,%(!VfY');
define('LOGGED_IN_SALT',   'zn]6Yc#J/9A3*9r3P;cvj`~j]89iKQPV0iPR(xWPL}$qB!*8 WFbz,hsp<CQo70N');
define('NONCE_SALT',       '+322]Cv1qLGf^{6N51]-sv>;a0uiMo!1b2Y&[!d8gN[[d_V2(|j]N+jr/ _Tv(jF');

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
