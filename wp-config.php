<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'ss_dbname_5564b31cbh');

/** MySQL database username */
define('DB_USER', 'x26wQI1372cI5gA');

/** MySQL database password */
define('DB_PASSWORD', '3LslhUcmsuKIsc4w');

/** MySQL hostname */
define('DB_HOST', 'godiscovercrcom.ipagemysql.com');

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
define('AUTH_KEY', 'UcBmuZko$+{iB&jwu[<]J-wXkY*t<<pA[Am<be(cqluR-K%vmE%djFL/wuExujL(+cXb_]Pu>Mxs>sl&|rz{(<snGMM|T_CSAO+N_bj[uLju}YXKo}[%QMXbMT$r{v;<');
define('SECURE_AUTH_KEY', 'ekZF{fizsl[WKj!VWOp)(Uzw(&_wI!C||UpNzjU};jrm-Sa<S/@xK<aL$CBlksDJ<*[jV?itVckZ}nu(ZSW;nfq(m)(-o=}w{X|s*Y;BNCns$]|nJiXcxeNbwajh=gvx');
define('LOGGED_IN_KEY', 'P=Hisv%CTXz(ga&Osg_-kAl)X[T=-eZceC!gRe$<tkK]_nE+F=xA|]BJM)L_kYWM@psbj/eF}zjvhCCY@IPAk^FqmvH|EhZ)oFP/D<eSKPgdnU]Npy@/jW]_;(!SwJ]{');
define('NONCE_KEY', 'KUXD$&G!cLHAQ!<${<YgS[dkLCru*)@q^p|AIs$Hi+qVbui*OhR[Z?w-@xk@YYuplB=@Dz;mafkZ{n^U{LM!BLZ*t_wV;</*n?N$Bp;mHig*O]*=!zrFRgiHo_IAk)oL');
define('AUTH_SALT', 'nxB_{RMi[?ia]ZkPMEARKITlif&+XrENucnO-rd$A?@-r[RHnCSYKR__Mcf{xGZo*z+@q>+QE&q)Quh)?Jo@pF/UXr)XX*wt{UN{SvjAuT!WVwhDvHHwFBAFXIUk[JeI');
define('SECURE_AUTH_SALT', 'YE[WFR@[QWTx]F(wTq}D===i?rEs(-f/Xay]Mf|gzt;JV<|ui(PibbN|HG;;||+FC+ZTlI;Ss}hQ&K@f>@//%x{;byh/HKH%BrLfW]Skfv*|w=[xO^%k-mbTsGH[Gg}(');
define('LOGGED_IN_SALT', 'nk@KkdNm*c^(oB-&)LDp=lumP;ruBWHlJb%nsomi%}a$[NbgJU$y>kpYhHTwNTAy^-;}voqT^$Dz(SL=Cm!jaK@O$+EU-x$_Nb<ZKf*htyilg+&$neHuGhL[U!PYh_KZ');
define('NONCE_SALT', 'D;x(X*)cxTl@??<n=SNERdD@kTVIis*rObZ([TEYJ@Q|[CsgS>nr]=T[)&NxsD!NGLe=a)/[p)aM+gBVFdrh{rPKG{F=Mj[G(Kxyk%n)?mRzEX;;HY@[yN@FtrVFnoYJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dcla_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
