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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~^!$ vH&`VZQ6/w1|u:=myM8Yxfv.1LLD[fi7i)Ph(ma8IT`=VM9`V4SiT$I4*EV' );
define( 'SECURE_AUTH_KEY',  'nO|(s` c((>q*+8]C5Hw^E|>Dz?#xRX:tSyJhyfxV@wArU~O^<3k2$6Wy1ohxUz{' );
define( 'LOGGED_IN_KEY',    'zZ|rIF3{qmG:OcDTq+K8,}pRj)Y+|+7u^3LK!%ki*|2Tg?&NyMNTuVGQ9Q:W`[C^' );
define( 'NONCE_KEY',        'xZOV%E# /[T75wl>ckr6AAY/rgN+soHp8wNkdrs=%8tyV(oRsZ:k2,z;(j.hH{vA' );
define( 'AUTH_SALT',        '23cgaB3T[m-hQQZ-J_lXcRO 7;E]+$_).^&ct$)dr*`EF_h`!W 7CGiFm]<c(4~*' );
define( 'SECURE_AUTH_SALT', ' ;Prn/Y2UNGBLpJoe hl|EaLJ0=*g9#KphA5^vkTzKecV|f>+s#p1|d;|lbItvaW' );
define( 'LOGGED_IN_SALT',   '>f^(cze-pW%ReB:+#385X9/Bf3?j*fTHq$qvads Z,sxHx^Hq~ucOQCNE`Y)1ow5' );
define( 'NONCE_SALT',       'bGD{=</Q{@Y mASR@c|h(?IUUC.~?C`)yhj.2Op$3P=n9z[L(U~x4;f,M-Ma`?0Y' );

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
