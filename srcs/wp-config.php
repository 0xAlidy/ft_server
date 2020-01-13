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
define( 'DB_USER', 'User' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define('AUTH_KEY',         'ofNt-mlL}LnQ#-Mk3=Wpk_4%R+_S/AEag10BtT1:Na+5|f<4~<GLDUPm^FJ!(dwX');
define('SECURE_AUTH_KEY',  '5Q%%.3OH 2|+aG]E++lRT-86IXn?+tXw~Lhr>/U0sTdhQJ&:N!{IE+@QX^3 #ANM');
define('LOGGED_IN_KEY',    'F-Tjgc8`&{,+^!,-TX3>0Lcrp|t{X-A?sPtDuU6a:$5ts6IG+MoCRwIhm5qC@BGM');
define('NONCE_KEY',        'fc?[L8(01&5j7gk1JZR_JNmlQ|z{kfi$tObX|MlA/@{aAuU%oM|Y}x}0 Fzgz1[]');
define('AUTH_SALT',        'WOg0rc/VQ&F{P6*D-F?C+~Kx}Lxm*k|A*{bd|!o=_4*}t3|M)3g^2T$L44.*zgD^');
define('SECURE_AUTH_SALT', 'Ti<W=pAqO)}_o3+s<d$uLC)6GOhoVS|8|{<*;dqtz+-Bf{,1%~B7(LtWcFGqFoc`');
define('LOGGED_IN_SALT',   'jSsQM:&GX:q8+CW|:qP;b3A}6L9Y`Xqf.S ^(l6WE <#>d_*l:QX{U/4_v2rn+8]');
define('NONCE_SALT',       'e!<bSH=YzF~(EuE$SFXI;Fk%`P@TuQHSYe)Nq*iSce9{/)$4@Y:on+?gMsJOxsSb');

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