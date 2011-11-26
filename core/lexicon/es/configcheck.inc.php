<?php
/**
 * Config Check Spanish lexicon topic
 *
 * @language es
 * @package modx
 * @subpackage lexicon
 */
$_lang['configcheck_admin'] = '¡Por favor, contacte a un administrador del sistema y adviértale sobre el mensaje!';
$_lang['configcheck_cache'] = 'el directorio de caché no se puede escribir';
$_lang['configcheck_cache_msg'] = 'MODx no puede escribir en el directorio de caché. MODx funcionará como se espera, pero sin el caché activo. Para solucionarlo. Para resolverlo asigne permiso de escritura al directorio /_cache/.';
$_lang['configcheck_configinc'] = '¡El archivo de configuración todavía se puede modificar!';
$_lang['configcheck_configinc_msg'] = 'Su sitio es vulnerable a hackers que pueden realizar gran daño al mismo. Por favor, ponga su configuración en solo lectura! ¡Si no es el administrador del sitio, contacte a uno y adviértale sobre este mensaje! El archivo se encuentra en core/config/config.inc.php';
$_lang['configcheck_default_msg'] = 'Se encontró un error sin especificar. El cual es extraño.';
$_lang['configcheck_errorpage_unavailable'] = 'La página de error del sitio no está disponible.';
$_lang['configcheck_errorpage_unavailable_msg'] = 'Esto significa que su página de error no se encuentra accesible a los usuarios web o no existe. Esto puede llevar a una condición de bucle recursivo y muchos errores en los logs del sitio. Asegúrese de que no hay grupos asignados a la página.';
$_lang['configcheck_errorpage_unpublished'] = 'La página de error de su sitio no se encuentra publicada o no existe.';
$_lang['configcheck_errorpage_unpublished_msg'] = 'Esto significa que su página de error se encuentra inaccesible por el público. Publique la página o asegúrese que se encuentra asignada a un documento existente en el árbol de su sitio en el menú Sistema &gt; Configuración del Sistema';
$_lang['configcheck_images'] = 'No se puede escribir el directorio de imágenes';
$_lang['configcheck_images_msg'] = 'El directorio no se puede escribir, o no existe. El editor del Administrador de Imágenes no funcionará!';
$_lang['configcheck_installer'] = 'El instalador todavía está presente';
$_lang['configcheck_installer_msg'] = 'El directorio setup/ contiene el instalador de MODx. ¡Imagínese si una persona malvada encuentra este directorio y ejecuta el instalador! Probablemente no llegue muy lejos, porque necesitará ingresar la información de usuario de la base de datos, de todas maneras es mejor eliminarlo del servidor.';
$_lang['configcheck_lang_difference'] = 'Hay cantidad de entradas incorrectas en archivo de lenguaje';
$_lang['configcheck_lang_difference_msg'] = 'El lenguaje seleccionado tiene gran cantidad de entradas diferentes comparado con el lenguaje por defecto. Mientras que esto no es un problema, significa que debe actualizar el archivo de lenguaje.';
$_lang['configcheck_notok'] = 'Uno o más detalles de configuración salieron OK: ';
$_lang['configcheck_ok'] = 'Verificación OK - sin advertencias para reportar.';
$_lang['configcheck_register_globals'] = 'Se encuentra activada la opción register_globals en su archivo de configuración php.ini';
$_lang['configcheck_register_globals_msg'] = 'Esta configuración hace que su sitio sea suceptible a ataques entre sitios (XSS). Debería contactar a su servicio de hosting para deshabilitarlo.';
$_lang['configcheck_title'] = 'Verificación de configuración';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'Su página de Desautorizado no existe o no se encuentra publicada.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'Su página de Desautorizado no se encuentra accesible por el público en general o no existe. Esto puede llevar a una condición de bucle recursivo y muchos errores en los logs del sitio. Asegúrese de que no hay grupos asignados a la página.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'Su página de Desautorizado no se encuentra publicada.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'Su página de Desautorizado no se encuentra accesible por el público en general. Publique la página y asegúrese que se encuentra asignada a un documento existente en el árbol de su sitio en el menú Sistema &gt; Configuración del Sistema.';
$_lang['configcheck_warning'] = 'Advertencia de configuración::';
$_lang['configcheck_what'] = '¿Que significa esto?';