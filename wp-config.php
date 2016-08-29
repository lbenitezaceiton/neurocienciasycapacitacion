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
define('DB_NAME', 'neurociencias_y_capacitacion');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Awdsawds2');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY', '*u?OZ]]-J Z-(i8S6s:)w3quc,Z|Csg=Y!e-q)UT),%{N9#5OZ#1UO!W?{ UW:hD');
define('SECURE_AUTH_KEY', 'eGN4Xe@BO|`2gO-oI#N;36%vt@#%4ne_Nk=ygDNJ rgyr^APRrJk^jcbJi!o(oxa');
define('LOGGED_IN_KEY', 'Jatg+yY5,76]/yD^GD+1:#8H[=hwoXp^1G]tg&6MS>BK^A^ #>,Gr<Cqi<d=d#uX');
define('NONCE_KEY', 'tCqZb<WfbDzrS:WIcBnd|e~g-BS7AyIznY0^BRw);E]; LxC.@mA5/O@iu@t5u(a');
define('AUTH_SALT', 'AguRy|[MKa>s9u&IKJMD:M<U::,pN)ogA9_RXYLHEV^n7,hV7 Au&bzvG]-}+}=R');
define('SECURE_AUTH_SALT', '^U-X[upm&YRI~}QDm]};)O> c)^&Aa>X{c#v,ij_o<!&][R}H%Lx5 )k?xo)OXCS');
define('LOGGED_IN_SALT', '|,Kr%m!cT GVN&UtHu[h>&$8/1)@AER+%`z<rzcVC,l_zu{7M.,>BB;h.E)q2r)>');
define('NONCE_SALT', 'p|j1x/(B`*i #M8hP8uBPCu:=]]QV+Ga6o.xzmNX-1r!?)G}}7AYUAZVcW2#}y+B');

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

