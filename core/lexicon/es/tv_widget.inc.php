<?php
/**
 * TV Widget Spanish lexicon topic
 *
 * @language es
 * @package modx
 * @subpackage lexicon
 */
$_lang['attributes'] = 'Atributos';
$_lang['capitalize'] = 'Capitalizar';
$_lang['checkbox'] = 'Casilla de verificación';
$_lang['class'] = 'Clase';
$_lang['combo_allowaddnewdata'] = 'Permitir añadir nuevos elementos';
$_lang['combo_allowaddnewdata_desc'] = 'Si es positivo, permite añadir a la lista elementos que todavía no existen en ella. Por defecto No.';
$_lang['combo_forceselection'] = 'Forzar la selección de la lista';
$_lang['combo_forceselection_desc'] = 'Si se utiliza Texto Predictivo, si este está configurado como Sí, solamente se permite la introducción de elementos en la lista.';
$_lang['combo_listempty_text'] = 'Texto de la Lista Vacío';
$_lang['combo_listempty_text_desc'] = 'Si el Texto Predictivo está activo, y el usuario introduce un tipo que no se encuentra en la lista, se muestra este texto.';
$_lang['combo_listwidth'] = 'Ancho de la lista';
$_lang['combo_listwidth_desc'] = 'El ancho, en píxeles, de la propia lista desplegable. Por defecto toma el ancho del cuadro de selección múltiple.';
$_lang['combo_maxheight'] = 'Ancho Máx.';
$_lang['combo_maxheight_desc'] = 'El máximo alto en píxeles de la lista desplegable, antes de que se muestren las barras de scroll (por defecto 300).';
$_lang['combo_stackitems'] = 'Agrupar elementos seleccionados';
$_lang['combo_stackitems_desc'] = 'Cuando está configurado en Sí, los elementos se agruparán 1 por línea. Por defecto en No, se muestran los elementos seguidos.';
$_lang['combo_title'] = 'Encabezado de lista';
$_lang['combo_title_desc'] = 'Si se aporta, un elemento de encabezado se creará conteniendo este texto y se añadirá al principio de la lista desplegable.';
$_lang['combo_typeahead'] = 'Habilitar Texto Predictivo';
$_lang['combo_typeahead_desc'] = 'Si está activo, rellena y autoselecciona el resto del texto que está siendo escrito tras un intervalo configurable (Intervalo del Texto Predictivo) siempre y cuando coincida con un valor conocido (por defecto no activado).';
$_lang['combo_typeahead_delay'] = 'Intervalo del Texto Predictivo';
$_lang['combo_typeahead_delay_desc'] = 'La cantidad de tiempo en milisegundos a esperar antes de que el Texto Predictivo sea mostrado siempre que haya sido activado (por defecto 250).';
$_lang['date'] = 'Fecha';
$_lang['date_format'] = 'Formato de fecha';
$_lang['date_use_current'] = 'Si no hay valor, utilizar la fecha actual';
$_lang['default'] = 'Por defecto';
$_lang['delim'] = 'Delimitador';
$_lang['delimiter'] = 'Delimitador';
$_lang['disabled_dates'] = 'Fechas deshabilitadas';
$_lang['disabled_dates_desc'] = 'Un listado separado por comas de "fechas" a deshabilitar, como texto. Estas cadenas se usarán para construir una expresión regular dinámica, con lo que son muy potentes. Algunos ejemplos:<br />
- Deshabilitar estas fechas exactas: 2003-03-08,2003-09-16<br />
- Deshabilitar estos días en cada año: 03-08,09-16<br />
- Solamente coincidir con el principio (útil si utiliza un formato de años corto): ^03-08<br />
- Deshabilitar todos los días de Marzo de 2006: 03-..-2006<br />
- Deshabilitar todos los días de todos los Marzos: ^03<br />
Tenga en cuenta que el formato de las fechas incluido en la lista debe coincidir exactamente con el formato configurado. Para soportar las expresiones regulares, si está usando un formato de fecha que contiene "." en él, deberá escapar los puntos al restringir las fechas.';
$_lang['disabled_days'] = 'Días deshabilitados';
$_lang['disabled_days_desc'] = 'Una lista separada por comas de días a deshabilitar, empieza por 0 que sería domingo, 1 lunes, etc (por defecto es nula). Algunos ejemplos:<br />
- Deshabilitar Domingo y Sábado: 0,6<br />
- Deshabilitar los días entre semana: 1,2,3,4,5';
$_lang['dropdown'] = 'Lista de menú desplegable';
$_lang['earliest_date'] = 'Fecha anterior';
$_lang['earliest_date_desc'] = 'La fecha permitida más anterior que se puede seleccionar.';
$_lang['earliest_time'] = 'Hora anterior';
$_lang['earliest_time_desc'] = 'La hora permitida más anterior que se puede seleccioanr.';
$_lang['email'] = 'Email';
$_lang['file'] = 'Fichero';
$_lang['height'] = 'Alto';
$_lang['hidden'] = 'Oculto';
$_lang['htmlarea'] = 'Area HTML';
$_lang['htmltag'] = 'Etiqueta HTML';
$_lang['image'] = 'Imagen';
$_lang['image_align'] = 'Alinear';
$_lang['image_align_list'] = 'none,baseline,top,middle,bottom,texttop,absmiddle,absbottom,left,right';
$_lang['image_alt'] = 'Texto alternativo';
$_lang['image_border_size'] = 'Tamaño del borde';
$_lang['image_hspace'] = 'Espacio Horizontal';
$_lang['image_vspace'] = 'Espacio Vertical';
$_lang['latest_date'] = 'Fecha posterior';
$_lang['latest_date_desc'] = 'La fecha permitida más posterior que se puede seleccionar.';
$_lang['latest_time'] = 'Hora posterior';
$_lang['latest_time_desc'] = 'La hora permitida más posterior que se puede seleccionar.';
$_lang['listbox'] = 'Cuadro de lista (individual)';
$_lang['listbox-multiple'] = 'Cuadro de lista (Múltiple)';
$_lang['lower_case'] = 'Minúsculas';
$_lang['max_length'] = 'Longitud máxima';
$_lang['min_length'] = 'Longitud mínima';
$_lang['name'] = 'Nombre';
$_lang['number'] = 'Número';
$_lang['number_allowdecimals'] = 'Permitir Decimales';
$_lang['number_allownegative'] = 'Permitir Negativos';
$_lang['number_decimalprecision'] = 'Precisión Decimal';
$_lang['number_decimalprecision_desc'] = 'La precisión decimal máxima a mostrar tras el separador de decimales (por defecto 2).';
$_lang['number_decimalseparator'] = 'Separador de Decimales';
$_lang['number_decimalseparator_desc'] = 'Carácter(es) permitidos como separadores de decimales (por defecto ".")';
$_lang['number_maxvalue'] = 'Valor máximo';
$_lang['number_minvalue'] = 'Valor mínimo';
$_lang['option'] = 'Selector de radio';
$_lang['parent_resources'] = 'Recursos Padres';
$_lang['radio_columns'] = 'Columnas';
$_lang['radio_columns_desc'] = 'El número de columnas en las que se muestran los selectores de radio.';
$_lang['rawtext'] = 'Texto sin formato (obsoleto)';
$_lang['rawtextarea'] = 'Area de texto sin formato (obsoleto)';
$_lang['required'] = 'Permitir en blanco';
$_lang['required_desc'] = 'Si configurado como No, MODX no permitirá al usuario guardar el Recurso hasta que no introduzca un valor válido no vacío.';
$_lang['resourcelist'] = 'Lista de recursos';
$_lang['resourcelist_depth'] = 'Profundidad';
$_lang['resourcelist_depth_desc'] = 'Los niveles de profundidad que la consulta utilizará para crear el listado de recursos. 10 niveles por defecto.';
$_lang['resourcelist_includeparent'] = 'Incluir padres';
$_lang['resourcelist_includeparent_desc'] = 'Si es afirmativo, se incluirán los Recursos señalados como Padres en el listado.';
$_lang['resourcelist_limit'] = 'Limite';
$_lang['resourcelist_limit_desc'] = 'Número de Recursos a limitar en el listado. 0 o vacío significan infinito.';
$_lang['resourcelist_parents'] = 'Padres';
$_lang['resourcelist_parents_desc'] = 'Un listado de IDs para proporcionar hijos al listado.';
$_lang['resourcelist_where'] = 'Condiciones Where';
$_lang['resourcelist_where_desc'] = 'Un objeto JSON de condiciones "where" por los que filtrar en la consulta que recoge el listado de Recursos. (No soporta la búsqueda por TV)';
$_lang['richtext'] = 'Texto formateado';
$_lang['sentence_case'] = 'Mayúsculas a principio de oración';
$_lang['shownone'] = 'Permitir un selector vacío';
$_lang['shownone_desc'] = 'Permite al usuario seleccionar un selector vacío que es un valor en blanco.';
$_lang['start_day'] = 'Día de comienzo';
$_lang['start_day_desc'] = 'Índice de día en el que comienza la semana, basado en 0 (por defecto 0, que es Domingo)';
$_lang['string'] = 'Cadena';
$_lang['string_format'] = 'Formato de la cadena';
$_lang['style'] = 'Estilo';
$_lang['tag_id'] = 'ID de la etiqueta';
$_lang['tag_name'] = 'Nombre de la etiqueta';
$_lang['target'] = 'Objetivo';
$_lang['text'] = 'Texto';
$_lang['textarea'] = 'Area de texto';
$_lang['textareamini'] = 'Area de texto (Mini)';
$_lang['textbox'] = 'Caja de texto';
$_lang['time_increment'] = 'Incremento de tiempo';
$_lang['time_increment_desc'] = 'El número de minutos entre cada valor de tiempo en el listado (por defecto 15).';
$_lang['title'] = 'Título';
$_lang['upper_case'] = 'Mayúsculas';
$_lang['url'] = 'URL';
$_lang['url_display_text'] = 'Mostrar Texto';
$_lang['width'] = 'Ancho';