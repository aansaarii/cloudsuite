<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	// menu
	'admin:develop_tools' => 'Herramientas',
	'admin:develop_tools:sandbox' => 'Sanbox del Tema',
	'admin:develop_tools:inspect' => 'Inspecciona',
	'admin:inspect' => 'Inspecciona',
	'admin:develop_tools:unit_tests' => 'Tests unitarios',
	'admin:develop_tools:entity_explorer' => 'Explorador de entidades',
	'admin:developers' => 'Desarrolladores',
	'admin:developers:settings' => 'Configuraci&oacute;n',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Controle su configuración de desarrollo y depuración. Algunas de estas opciones también se encuentran disponibles en otras secciones de la administración.',
	'developers:label:simple_cache' => 'Utilizar cache simple',
	'developers:help:simple_cache' => 'Deshabilitar la cache mientras se desarrolla. De otro modo, las modificaciones a las views (incluyendo los css) serán ignoradas.',
	'developers:label:system_cache' => 'Utiliza el caché del sistema',
	'developers:help:system_cache' => 'Desactívalo mientras estés desarrollando. Si no, los cambios en los plugins no se verán.',
	'developers:label:debug_level' => "Nivel de monitoreo",
	'developers:help:debug_level' => "Esto controla la cantidad de información que se registra. Vea elgg_log() para más información.",
	'developers:label:display_errors' => 'Mostrar errores fatales de PHP',
	'developers:help:display_errors' => "Por defecto, el archivo .htaccess de Elgg deshabilita la visualización de errores fatales.",
	'developers:label:screen_log' => "Registrar en pantalla",
	'developers:help:screen_log' => "Se muestra la salida de elgg_log() y elgg_dump() y el contador de consultas a la Base de Datos",
	'developers:label:show_strings' => "Mostrar strings de traducciones extrañas",
	'developers:help:show_strings' => "Esto muestra las traducciones utilizadas por elgg_echo().",
	'developers:label:show_modules' => "Mostrar los módulos AMD cargados en la consola",
	'developers:help:show_modules' => "Flujos de módulos cargados y valores a su consola de JavaScript. ",
	'developers:label:wrap_views' => "Wrap de vistas",
	'developers:help:wrap_views' => "This wraps almost every view with HTML comments. Useful for finding the view creating particular HTML.
									This can break non-HTML views in the default viewtype. See developers_wrap_views() for details.",
	'developers:label:log_events' => "Eventos de Logs y Hooks de plugins",
	'developers:help:log_events' => "Escribir eventos y hooks de plugins en el log. Precaución: hay varios de estos por página.",
	'developers:label:show_gear' => "Usar %s fuera de la zona de administración",
	'developers:help:show_gear' => "Un icono en la parte inferior derecha de la ventana que permite el acceso de los administradores a la configuración y enlaces de desarrollo.",
	'developers:label:block_email' => "Block all outgoing e-mails",
	'developers:help:block_email' => "You can block outgoing e-mail to regular users or to all users",
	'developers:label:forward_email' => "Forward all outgoing e-mails to one address",
	'developers:help:forward_email' => "All outgoing e-mails will be sent to the configured e-mail address",
	'developers:label:enable_error_log' => "Enable error log",
	'developers:help:enable_error_log' => "Maintain a separate log of errors and messages logged to the error_log() based on your trace level setting. The log is viewable via admin interface.",

	'developers:label:submit' => "Guardar y liberar cachés",

	'developers:block_email:forward' => 'Forward all e-mails',
	'developers:block_email:users' => 'Only regular users',
	'developers:block_email:all' => 'Admins and regular users',
	
	'developers:debug:off' => 'Apagado',
	'developers:debug:error' => 'Error',
	'developers:debug:warning' => 'Precaución',
	'developers:debug:notice' => 'Información',
	'developers:debug:info' => 'Información',
	
	// entity explorer
	'developers:entity_explorer:help' => 'Ver información sobre entidades y realizar algunas acciones básicas en ellas.',
	'developers:entity_explorer:guid:label' => 'Introduzca el guid de la entidad para inspeccionar',
	'developers:entity_explorer:info' => 'Información de la Entidad',
	'developers:entity_explorer:info:attributes' => 'Atributos',
	'developers:entity_explorer:info:metadata' => 'Metadatos',
	'developers:entity_explorer:info:relationships' => 'Relaciones',
	'developers:entity_explorer:info:private_settings' => 'Configuración privada',
	'developers:entity_explorer:info:owned_acls' => 'Owned Access Collections',
	'developers:entity_explorer:info:acl_memberships' => 'Access Collections Memberships',
	'developers:entity_explorer:delete_entity' => 'Eliminar esta entidad',
	'developers:entity_explorer:inspect_entity' => 'Inspect this entity',
	
	// inspection
	'developers:inspect:help' => 'Inspección de configuration del framework Elgg.',
	'developers:inspect:actions' => 'Acciones',
	'developers:inspect:events' => 'Eventos',
	'developers:inspect:menus' => 'Menús',
	'developers:inspect:pluginhooks' => 'Ganchos de complementos',
	'developers:inspect:priority' => 'Prioridad',
	'developers:inspect:simplecache' => 'Caché Simple',
	'developers:inspect:routes' => 'Routes',
	'developers:inspect:views' => 'Vistas',
	'developers:inspect:views:all_filtered' => "<b>¡Nota!</b> Todas las salidas devueltas por las vistas son filtradas mediante Hooks de los plugins:",
	'developers:inspect:views:input_filtered' => "(Entrada filtrada por el hook del plugin: %s)",
	'developers:inspect:views:filtered' => "(filtrador por el hook del plugin: %s)",
	'developers:inspect:widgets' => 'Artilugios',
	'developers:inspect:webservices' => 'Servicios web',
	'developers:inspect:widgets:context' => 'Contexto',
	'developers:inspect:functions' => 'Funciones',
	'developers:inspect:file_location' => 'File path from Elgg root or controller',
	'developers:inspect:route' => 'Route Name',
	'developers:inspect:path' => 'Path Pattern',
	'developers:inspect:resource' => 'Resource View',
	'developers:inspect:handler' => 'Handler',
	'developers:inspect:controller' => 'Controller',
	'developers:inspect:file' => 'Archivo',
	'developers:inspect:middleware' => 'Archivo',
	'developers:inspect:handler_type' => 'Handled by',
	'developers:inspect:services' => 'Services',
	'developers:inspect:service:name' => 'Nombre',
	'developers:inspect:service:path' => 'Definition',
	'developers:inspect:service:class' => 'Class',

	// event logging
	'developers:request_stats' => "Solicitar estadísticas (No se incluye el evento shutdown)",
	'developers:event_log_msg' => "%s: '%s, %s' en %s",
	'developers:log_queries' => "%s consultas de Base de Datos",
	'developers:boot_cache_rebuilt' => "El caché de arranque se reconstruyó para esta solicitud",
	'developers:elapsed_time' => "Tiempo transcurrido (s)",

	// theme sandbox
	'theme_sandbox:intro' => 'Introducción',
	'theme_sandbox:breakout' => 'Fuera de iframe',
	'theme_sandbox:buttons' => 'Botones',
	'theme_sandbox:components' => 'Componentes',
	'theme_sandbox:forms' => 'Formularios',
	'theme_sandbox:grid' => 'Grilla',
	'theme_sandbox:icons' => 'Iconos',
	'theme_sandbox:javascript' => 'JavaScript',
	'theme_sandbox:layouts' => 'Estructuras',
	'theme_sandbox:modules' => 'Módulos',
	'theme_sandbox:navigation' => 'Navegación',
	'theme_sandbox:typography' => 'Tipografías',

	'theme_sandbox:icons:blurb' => 'Use <em>elgg_view_icon($name)</em> ola clase elgg-icon-$name para mostrar iconos.',

	// status messages
	'developers:settings:success' => 'Configuraciones almacenadas',

	'developers:amd' => 'AMD',

	'admin:develop_tools:error_log' => 'Error Log',
	'developers:logs:empty' => 'Error log is empty',
);
