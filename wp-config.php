<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'worpress_test' );

/** Database username */
define( 'DB_USER', 'dafou1' );

/** Database password */
define( 'DB_PASSWORD', 'dafou1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V&p:/w! xUf#Uc[}+/.(DrH^jMG]&T|QR>G7eXf:O~VP@q@9lpj3h FP#@Ht[rs%' );
define( 'SECURE_AUTH_KEY',  'L7%cQQ5rzCsU5sW{k&Gu=k%w;Ul,c1=kErq:8S&>u;dRV>t#9ghAHImHIL3k[~u}' );
define( 'LOGGED_IN_KEY',    'zr5f5e{;|(tic)crYsP.JG$_YpKGnZv{*#Bl5rO$D5eAIp`QqVq:Ft#G$`D?=0Oe' );
define( 'NONCE_KEY',        'P]1#[>i%pVzVr$B6?2+Bewo*u7Vj_<N,@l@@(F-`/A1v,}&V1r$OGnxtfV)=b]`j' );
define( 'AUTH_SALT',        '%.<?WZZ/]ylO/OIed6 H<?R-y3mM;{8pZu4Kd?A;/g*[5W4wB-Zs+8vxcp70<!3`' );
define( 'SECURE_AUTH_SALT', 'CX@Jq`_j%8|<+5.Wd+tda4 dn}0Ips|Ew*X|.[-6Mv1[dwSCoSc^+0!g31.gWIw1' );
define( 'LOGGED_IN_SALT',   'ar4yXQywSxJx9]X<_QNlOLDLslOa(A=+C~e0<U 0cP?^?HsI(T9EP!0!7^1G`#d8' );
define( 'NONCE_SALT',       'Q LdT]&>v=(o~0k+2<lqT/39F4i.(fB7,V~Nhi6HvWuo(Xar>`,t2K45b}o59E|&' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
