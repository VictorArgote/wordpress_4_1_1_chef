<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thxproddb');

/** MySQL database username */
define('DB_USER', 'thxdb');

/** MySQL database password */
define('DB_PASSWORD', 'n2VYzn6P7m');

/** MySQL hostname */
define('DB_HOST', 'thxrdsdb.cprxesilt2p9.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'vsS(|{?0oxad[*h}0mk/BIaF3XO+C+BOHldC5V3*K(@kWODr^90O&a+Eu]u_--W7');
define('SECURE_AUTH_KEY',  'O~x5OC|juS?~ADaK^oC0X^[Ia`-?MnWX,+o<e7wLJxtUp>uBB4F&Ol8oQV|;p-Da');
define('LOGGED_IN_KEY',    '-G~j8km2#DDi:*SQRH-GS8iU;a9U`AW!&`[I7eIIJaHyvPD(qV]_bta}bnuFG kr');
define('NONCE_KEY',        'K3TXCHFT~o#!buUy#M~4S-@E+GQ+,e$1<1,2+kMp)`y3&|34n=Zr1]G2!+;;Hl^9');
define('AUTH_SALT',        '|+<&#KG4`CHz&.8O0Cag:+1,8[cW:6-v^,VAbFG, ;(nT;Qa7bLGlR:F=@s:[Wps');
define('SECURE_AUTH_SALT', ',-#W:imk7Nz+d|eTd1{FOSvjFm8-;`=QXF;dC0aTEKKV.5|!YO;M+h1l{H6{L )3');
define('LOGGED_IN_SALT',   'K2{*R}a8(VgA+}M?L ;S&tB1~BBt{as3P2NJ]BQP:/Qh/(M^T^}Y4y;8aU>+{u.o');
define('NONCE_SALT',       'ousL?{KGT4k5Wg0^OzWD{y<[eZbAsv]b7LGbalR?s&D3vM@j&2S!GJD* G(x+W|b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '78133dsja';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_MAX_MEMORY_LIMIT', '60000M' );
define( 'WP_MEMORY_LIMIT', '64M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
