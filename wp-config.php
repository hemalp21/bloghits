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
define( 'DB_NAME', 'wordpresssite' );

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
define( 'AUTH_KEY',         'fEDx$p D0`3~0N rxCj>5d-^M{N:VrTr}rvy:14O3^)W7[UGb;u&GMglE8eeDBkN' );
define( 'SECURE_AUTH_KEY',  ')!{M8`MQ^vHHruANwSZK<!s;b$--ol[l:!c1-RJ~.ckXBnbBQF9&mRQ4NI&6-GO9' );
define( 'LOGGED_IN_KEY',    '3w/a2c7wVjAFJv4mQ<q$Ai#(SqvlN+ Y|4E`Tab}}*EI4<dF6%qxYiYql|.83ziJ' );
define( 'NONCE_KEY',        'U3b&Jk,D,j^Ami~Xin}X{Q4f*isEu^P0-OVOngR5ry),VoR7;M`t9mvn7WyeZGf`' );
define( 'AUTH_SALT',        'nqn/$I>H/_w%z=~ts+YobOW%LlU?i):5sRhZ|:YpEe61`<D/lVu_?@`.j`2w3Q!N' );
define( 'SECURE_AUTH_SALT', '!l5b1+&`YJPrc|;4=P*MAkw;J5juud4]1.s^(fp_>.8b.jl>.kR5[XgpW3~)s}u0' );
define( 'LOGGED_IN_SALT',   '?*DNKi,=vVB wB*&-JL3][D(GY:9h#s{$P6BVb@5xW/ Q*)+#@tX( =4FZy]oNiV' );
define( 'NONCE_SALT',       'c]bI1fdOQ&r$b@,o(J@^=BF/]jUd4RRh:3w[wP~2_(ppsG!#=;Np?1NfOepYCjb7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hemal';

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
