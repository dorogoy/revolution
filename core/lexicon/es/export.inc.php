<?php
/**
 * Export Spanish lexicon topic
 *
 * @language es
 * @package modx
 * @subpackage lexicon
 */
$_lang['export_site_cacheable'] = 'Incluir ficheros no cacheables:';
$_lang['export_site_exporting_document'] = 'Exportando fichero <strong>%s</strong> de <strong>%s</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i>%s</i>, id %s</small><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$_lang['export_site_failed'] = '<span style="color:#990000">¡Falló!</span>';
$_lang['export_site_html'] = 'Exportar sitio a HTML';
$_lang['export_site_maxtime'] = 'Tiempo máximo de exportación:';
$_lang['export_site_maxtime_message'] = 'Aquí puede especificar el número de segundos que MODx puede emplear en la exportación de este sitio (sobreescribiendo la configuración de PHP). Introduzca 0 para tiempo ilimitado. Por favor, tenga en cuenta que al configurar 0 o algún número realmente grande le pueden ocurrir cosas extrañas a su servidor y no se recomienda hacerlo.';
$_lang['export_site_message'] = '<p>Utilizando esta función puede exportar el sitio completo a ficheros HTML. Por favor, tenga en cuenta por otro lado, que perderá muchísimas funcionalidades de MODx si lo hace:</p><ul><li>Las páginas leídas desde los ficheros exportados no serán monitorizadas.</li><li>Los snippets interactivos NO funcionarán en los ficheros exportados</li><li>Solamente se exportarán documentos reales, los Weblinks no se exportarán.</li><li>El proceso de exportación puede fallar si sus documentos contienen snippets que envién encabezados de redireccionamiento.</li><li>Dependiendo de como haya escrito sus documentos, hojas de estilo e imágenes, el diseño de su sitio se puede alterar. Para arreglar esto, puede guardar/mover sus ficheros exportados al mismo directorio donde se encuentre ubicado el fichero index.php principal de MODx.</li></ul><p>Por favor, rellene el formulario y pulse \'Exportar\' para comenzar el proceso de exportación. Los ficheros creados se guardarán en la ubicación que especifique, utilizando siempre que sea posible, los alias de documentación como nombres de fichero. Mientras se exporte sus sitio, es mejor tener el item de configuración de MODx \'alias amigables\' configurado como \'si\'. Dependiendo del tamaño de su sitio, la exportación puede tardar un poco.</p><p><em>¡Cualquier fichero existente será sobreescrito por los ficheros nuevos, si sus nombres son idénticos!</em></p>';
$_lang['export_site_numberdocs'] = '<p><strong>Econtrados %s documentos para exportar...</strong></p>';
$_lang['export_site_prefix'] = 'Prefijo de fichero:';
$_lang['export_site_start'] = 'Compenzar exportación';
$_lang['export_site_success'] = '<span style="color:#009900">¡Éxito!</span>';
$_lang['export_site_suffix'] = 'Sufijo de fichero:';
$_lang['export_site_target_unwritable'] = 'El directorio objetivo no es escribible. Por favor, asegúrese de que el escritorio sea escribible e inténtelo de nuevo.';
$_lang['export_site_time'] = 'Exportación terminada. La exportación empleó %s segundos en completarse.';