<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'PropiedadesGaldames');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '.Wpz[Gm8KL/Gm@K&=D.x6vs0-=+Zol5 9XWLU^MncKp*gj|V:+A!l2_b!2LI)93t');
define('SECURE_AUTH_KEY', 'w!f`s1Vn,3-3Ym|cA&7>{A4H;c-6K:H1S]pC6ftslxc.x+Ms=zwvA?d#2~3y@!-m');
define('LOGGED_IN_KEY', 'xu OY$Aad[)W<*;KS)I2jp==3PV<BI{-#u_WWPZa0p~rcfa~CL3A3@qJsDnkBJ5d');
define('NONCE_KEY', 'Zm@9Y!lRK;B]>*$MN,OF*S)m(E%;E8oa*)o^sfec%1)m![Jo4R$`@(|`@xSk*>E@');
define('AUTH_SALT', ')]hi )A%_>dS|Y0z?#1t^SMd&Sw{g-5%sjv_tf.f3bWnR0K(VY4ge5v<l-yFhOuT');
define('SECURE_AUTH_SALT', 'k2]#L,8vhz<,?:m{+Ah-m@d?KLc2:yf+HH,z0d#^rz_PUJPyYCVpNzMf1(J$[jFT');
define('LOGGED_IN_SALT', 'kTu$o*N>?:Eq/^!{[oZd{>4_ZWIk2yzZmluP Mx^G7wYyGDIl|[b$>clu-^G&)R6');
define('NONCE_SALT', '%#{.`CJ@0<U?4:}M{0:89fJ@WAM5<f3d.Em?m}-^ypRv:iVQ>ipg7fNX@r-McC`9');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

