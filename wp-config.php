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
define( 'DB_NAME', 'template4' );

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
define( 'AUTH_KEY',         'K2,gv4;+e: 3B;DtwM7Z$?p` wstojX(AOnL=A{v;SdWVo.IRQe8P;;{~)u$9mJZ' );
define( 'SECURE_AUTH_KEY',  'T^g)}J*Q8?,o*7RQtQYOX&A3$pj{>t_f&o7C%6?$g#$A{`N3_Cp2X~2z=**i<AOP' );
define( 'LOGGED_IN_KEY',    'wlTbV@KhWwf^vb=2ul,)C:ni+!W^}~1X5gvYVFl]G0)<s`xo2dtTC=_64f=D=J;k' );
define( 'NONCE_KEY',        '#ZhO[olO0)Ak4j)mO[5Vmqk6QasVYfaejqL8#x|o6>}2waReLCO<!cN7Q;3}H<3Z' );
define( 'AUTH_SALT',        ']Za?w(dRE4OWyDBJozX;)&:Qq)_@FO2kocDgc ox/RSVCI@=@c]m#8IaAKXO R6b' );
define( 'SECURE_AUTH_SALT', 'pDnGL~-t?S`>hS}LHJ_b3m/Y7_KpDk=<OFKTQ|{XpV9fqpzdx,|N93;^h--1[Xg6' );
define( 'LOGGED_IN_SALT',   '`cX8!LDtp9nuhbbU ha|2W  :GMF<dR4>^H{aBi;-`Sb0IKzy=&MlSuEmzJ}kGBp' );
define( 'NONCE_SALT',       '8_zB~>%*H8ts_#X-, LTyqJ$@d}AnnGVAO:zu 6yzKIAmufQtZ5+P&Cw N^1jLNh' );

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
