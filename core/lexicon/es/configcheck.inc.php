<?php
/**
 * Config Check Spanish lexicon topic
 *
 * @language es_ES
 * @package modx
 * @subpackage lexicon
 */
$_lang['configcheck_admin'] = '�Por favor, contacte a un administrador del sistema y advi�rtale sobre este mensaje!';
$_lang['configcheck_allowtagsinpost_context_enabled'] = 'allow_tags_in_post Context Setting Enabled outside `mgr`';
$_lang['configcheck_allowtagsinpost_context_enabled_msg'] = 'The allow_tags_in_post Context Setting is enabled in your installation outside the mgr Context. MODX recommends this setting be disabled unless you need to explicitly allow users to submit MODX tags, numeric entities, or HTML script tags via the POST method to a form in your site. This should generally be disabled except in the mgr Context.';
$_lang['configcheck_allowtagsinpost_system_enabled'] = 'allow_tags_in_post System Setting Enabled';
$_lang['configcheck_allowtagsinpost_system_enabled_msg'] = 'The allow_tags_in_post System Setting is enabled in your installation. MODX recommends this setting be disabled unless you need to explicitly allow users to submit MODX tags, numeric entities, or HTML script tags via the POST method to a form in your site. It is better to enable this via Context Settings for specific Contexts.';
$_lang['configcheck_cache'] = 'el directorio de cach� no es escribible';
$_lang['configcheck_cache_msg'] = 'MODx no puede escribir en el directorio de cach�. MODx funcionar� como se espera, pero sin la cach� activa. Para solucionarlo asigne permiso de escritura al directorio /_cache/.';
$_lang['configcheck_configinc'] = '�El archivo de configuraci�n todav�a se puede modificar!';
$_lang['configcheck_configinc_msg'] = 'Su sitio es vulnerable a hackers que pueden realizar gran da�o al mismo. �Por favor, ponga su configuraci�n en solo lectura! �Si no es el administrador del sitio, contacte a uno y advi�rtale sobre este mensaje! Se encuentra en [[+path]]';
$_lang['configcheck_default_msg'] = 'Se encontró un error sin especificar. El cual es extraño.';
$_lang['configcheck_errorpage_unavailable'] = 'La página de error del sitio no está disponible.';
$_lang['configcheck_errorpage_unavailable_msg'] = 'Esto significa que su página de error no se encuentra accesible a los usuarios web o no existe. Esto puede llevar a una condición de bucle recursivo y muchos errores en los logs del sitio. Asegúrese de que no hay grupos asignados a la página.';
$_lang['configcheck_errorpage_unpublished'] = 'La página de error de su sitio no se encuentra publicada o no existe.';
$_lang['configcheck_errorpage_unpublished_msg'] = 'Esto significa que su página de error se encuentra inaccesible para el público. Publique la página o asegúrese que se encuentra asignada a un documento existente en el árbol de su sitio en el menú Sistema &gt; Configuración del Sistema';
$_lang['configcheck_images'] = 'No se puede escribir el directorio de imágenes';
$_lang['configcheck_images_msg'] = 'El directorio no se puede escribir, o no existe. ¡El editor del Administrador de Imágenes no funcionará!';
$_lang['configcheck_installer'] = 'El instalador todavía está presente';
$_lang['configcheck_installer_msg'] = 'El directorio setup/ contiene el instalador de MODx. ¡Imagínese si una persona malvada encuentra este directorio y ejecuta el instalador! Probablemente no llegue muy lejos, porque necesitará ingresar la información de usuario de la base de datos, de todas maneras es mejor eliminarlo del servidor. Se encuentra en: [[+path]]';
$_lang['configcheck_lang_difference'] = 'Hay un número incorrecto de entradas en el archivo de lenguaje';
$_lang['configcheck_lang_difference_msg'] = 'El lenguaje seleccionado tiene gran cantidad de entradas diferentes comparado con el lenguaje por defecto. Mientras que esto no es un problema, significa que debe actualizar el archivo de lenguaje.';
$_lang['configcheck_notok'] = 'Uno o más detalles de configuración no salieron bien: ';
$_lang['configcheck_ok'] = 'Verificación OK - sin advertencias por reportar.';
$_lang['configcheck_register_globals'] = 'Se encuentra activada la opción register_globals en su archivo de configuración php.ini';
$_lang['configcheck_register_globals_msg'] = 'Esta configuración hace que su sitio sea vulnerable a ataques entre sitios (XSS). Debería contactar a su servicio de hospedaje para deshabilitarlo.';
$_lang['configcheck_title'] = 'Verificación de configuración';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'Su página de No Autorizado no existe o no se encuentra publicada.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'Su página de No Autorizado no se encuentra accesible para el público en general o no existe. Esto puede llevar a una condición de bucle recursivo y muchos errores en los logs del sitio. Asegúrese de que no hay grupos asignados a la página.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'Su página de No Autorizado no se encuentra publicada.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'Su p�gina de No Autorizado no se encuentra accesible para el p�blico en general. Publique la página y asegúrese que se encuentra asignada a un documento existente en el árbol de su sitio en el menú Sistema &gt; Configuración del Sistema.';
$_lang['configcheck_warning'] = 'Advertencia de configuraci�n:';
$_lang['configcheck_what'] = '�Qu� significa esto?';
