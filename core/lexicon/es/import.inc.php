<?php
/**
 * Import Spanish lexicon entries
 *
 * @language es
 * @package modx
 * @subpackage lexicon
 */
$_lang['import_allowed_extensions'] = 'Especifique un lista de extensiones de fichero a importar separadas por comas.<br /><small><em>Deje en blanco para importar todos los ficheros de acuerdo con los tipos de contenido disponibles en su sitio. Los tipos desconocidos se mapearán como texto sin formato.</em></small>';
$_lang['import_base_path'] = 'Introduzca la ruta de ficheros base que contiene los ficheros a importar.<br /><small><em>Deje en blanco para utilizar la configuración de rutas de ficheros estáticos según el contexto del objetivo.</em></small>';
$_lang['import_duplicate_alias_found'] = 'El recurso [[+id]] ya está utilizando el alias [[+alias]]. Por favor, introduzca un alias único.';
$_lang['import_element'] = 'Introduzca la raíz del elemento HTML a importar:';
$_lang['import_enter_root_element'] = 'Introduzca la raíz del elemento a importar:';
$_lang['import_files_found'] = '<strong>Se encontraron %s documentos para importar...</strong><p/>';
$_lang['import_parent_document'] = 'Document Padre:';
$_lang['import_parent_document_message'] = 'Utilice el árbol de documentos mostrado a continuación para seleccionar la ubicación en la que desee importar sus ficheros.';
$_lang['import_resource_class'] = 'Seleccione una clase modResource a importar:<br /><small><em>Utilice modStaticResource para enlazar con ficheros estáticos, o modDocument para copiar el contenido en la base de datos.</em></small>';
$_lang['import_site_failed'] = '<span style="color:#990000">¡Falló!</span>';
$_lang['import_site_html'] = 'Importar sitio desde HTML';
$_lang['import_site_importing_document'] = 'Importando fichero <strong>%s</strong> ';
$_lang['import_site_maxtime'] = 'Máx tiempo de importación:';
$_lang['import_site_maxtime_message'] = 'Aquí puede especificar el número de segundos que el Administrador de Contenidos puede tomarse para importar el sitio (sobreescribiendo la configuración de PHP). Introduzca 0 para un tiempo ilimitado. Por favor, tenga en cuenta que configurar 0 o un número realmente alto puede tener consecuencias desagradables en su servidor y no se recomienda.';
$_lang['import_site_message'] = '<p>Utilizando esta herramienta puede importar el contenido de un lote de ficheros HTML a la base de datos. <em>Por favor, tenga en cuenta de que deberá copiar sus ficheros y/o directorios en el directorio de importación.</em></p><p>Por favor, rellene las opciones del formulario mostrado a continuación, opcionalmente seleccione un recurso padre desde el árbol de documentos para los ficheros importados, y presione \'Importar HTML\' para comenzar el proceso de importación. Los ficheros importados se guardarán en la dirección seleccionada, usando, siempre que sea posible, los nombres de fichero como alias de documento y los títulos de página como título de documento.</p>';
$_lang['import_site_resource'] = 'Importar recursos desde ficheros estáticos';
$_lang['import_site_resource_message'] = '<p>Utilizando esta herramienta puede importar recursos desde un lote de ficheros estáticos hacia la base de datos. <em>Por favor, tenga en cuenta que deberá de copiar sus ficheros y/o directorios dentro del directorio de importación.</em></p><p>Por favor, rellene las opciones del formulario mostrado a continuación, opcionalmente seleccione un recurso padre desde el árbol de documentos para los ficheros importados, y presione \'Importar Recursos\' para comenzar el proceso de importación. Los ficheros importados se guardarán en el lugar que haya seleccionado, usando, siempre que sea posible, los nombres de fichero como alias de documento y, si son HTML, el título de página como el título de documento.</p>';
$_lang['import_site_skip'] = '<span style="color:#990000">¡Saltado!</span>';
$_lang['import_site_start'] = 'Comenzar Importación';
$_lang['import_site_success'] = '<span style="color:#009900">¡Éxito!</span>';
$_lang['import_site_time'] = 'Importación finalizada. La importación tardó %s segundos en completarse.';
$_lang['import_use_doc_tree'] = 'Utilice el árbol de documentos presentado a continuación para seleccionar la ubicación desde la que importar sus ficheros.';