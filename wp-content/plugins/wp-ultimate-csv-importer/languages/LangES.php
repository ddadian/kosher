<?php
/**
 * WP Ultimate CSV Importer plugin file.
 *
 * Copyright (C) 2010-2020, Smackcoders Inc - info@smackcoders.com
 */

namespace Smackcoders\FCSV;

if (!defined('ABSPATH'))
        exit; // Exit if accessed directly

class LangES
{
        private static $spanish_instance = null, $media_instance;

        public static function getInstance()
        {
                if (LangES::$spanish_instance == null) {
                        LangES::$spanish_instance = new LangES;
                        return LangES::$spanish_instance;
                }
                return LangES::$spanish_instance;
        }

        public static function contents()
        {
                $response = array(
                        'ImportUpdate' => 'Importar actualización',
                        'Dashboard' => 'Tablero',
                        'Manager' => 'Gerente',
                        'Export' => 'Exportar',
                        'Settings' => 'Configuraciones',
                        'Support' => 'Apoyo',
                        'Exportfiltereddata' => 'Exportar datos filtrados',
                        'Exportfiltereddatadesc' => 'Le permite obtener solo los datos requeridos con los diferentes filtros avanzados',
                        'Backupineditableformat' => 'Copia de seguridad en formato editable',
                        'Backupineditableformatdesc' => 'Copia de seguridad en 4 formatos de archivo diferentes como CSV, XML, JSON, XLS.',
                        'AutoScheduledBackups' => 'Copias de seguridad programadas automáticamente',
                        'AutoScheduledBackupsdesc' => 'La exportación programada ayuda a realizar copias de seguridad como formato de archivo de texto editable en intervalos regulares.',
                        'UploadfromDesktop' => 'Subir desde el escritorio',
                        'UploadfromFTPSFTP' => 'Subir desde FTP / SFTP',
                        'UploadfromURL' => 'Subir desde URL',
                        'ChoosFileintheServer' => 'Elegir archivo en el servidor',
                        'Drag&Dropyourfilesor' => 'Arrastra y suelta tus archivos o',
                        'GetSupport' => 'OBTENER APOYO',
                        'Browse' => 'Navegar',
                        'SampleCSVXML' => 'CSV y XML de muestra',
                        'NewItem' => 'Nuevo artículo',
                        'UltimateCSVImporterPro' => 'UltimateCSVImporterPro',
                        'ExistingItems' => 'Artículos existentes',                        
                        'ImportEachRecordAs' => 'Import each record as',
                        'Continue' => 'Hacer continuación',
                        'Search' => 'Buscar',
                        'Posts' => 'publicaciones',
                        'Pages' => 'Paginas',
                        'Posttags' => 'Posttags',
                        'PostCategories' => 'Categorías de publicaciones',
                        'Taxonomies' => 'Taxonomías',
                        'CustomPosts' => 'Publicaciones personalizadas',
                        'Updateolderpostsfromsingleimport' => 'Actualizar publicaciones anteriores desde una sola importación',
                        'AutoSchedulewithreusabletemplates' => 'Programación automática con plantillas reutilizables',                
                        'JetEngineMetaboxToolsetTypesACFproFreeandPodsFieldPostPluginsImporter' => 'JetEngine, Metabox, Toolset Types, ACF pro / Free y Pods Importador de complementos de campo/pos',
                        'AIOWooCommerceImportSuit' => 'Traje de importación AIO WooCommerce',
                        'WPMLImporter' => 'Importador de WPML',
                        'SEOPluginsDataImporterRankMathYoastandAllinOneSEO' => 'Importador de datos de complementos de SEO: RankMath, Yoast y SEO todo en uno',
                        'Exporterwithadvancedfilters' => 'Exportador con filtros avanzados',
                        'Gotoaddons'=>'Ir a complementos',
                        'UltimateExporterPro' => 'Exportador definitivo Pro',
                        'AutoScheduledBackups' => 'Copias de seguridad programadas automáticamente',
                        'Scheduledexporthelpsbackupaseditabletextfileformat' => 'La exportación programada ayuda a respaldar como formato de archivo de texto editable
                        en intervalo regular.',
                        'instruction' => '(Cada no de registros por archivo)',
                        'Exportfiltereddata' => 'Exportar datos filtrados',
                        'Letsyougetonlyrequireddatawiththedifferentadvancedfilters' => 'Le permite obtener solo los datos requeridos con los diferentes avanzados filtros',
                        'ExportfeatureisdisabledInstallandactivatetheaddonpluginfirst'=>'Advertencia: la función de exportación está deshabilitada. Instale y active primero el complemento adicional',
                        'Backupin4differentfileformatslikeCSV' => 'Copia de seguridad en 4 formatos de archivo diferentes como CSV, XML, JSON, XLS.',                
                        'backupineditableformat' => 'copia de seguridad en formato editable',
                        'WarningImportforsomedataaredisabledInstallandactivatebelowpluginsfirst' => 'Advertencia: Faltan algunos complementos, se recomienda',
                        'Buynow' => 'Comprar ahora!',
                        'FromDate' => 'Partir de la fecha',
                        'ToDate' => 'Hasta la fecha',
                        'SEARCH' => 'BUSCAR',
                        'installactivate' => 'para instalar y activar ahora',
                        'csv_importlink' => 'haga clic aquí',
                        'SavedTemplate' => 'Plantilla guardada',
                        'TEMPLATES' => 'PLANTILLAS',
                        'MATCHEDCOLUMNSCOUNT' => 'MATCHED COLUMNS COUNT',
                        'MODULE' => 'MÓDULO',
                        
                        'CREATEDTIME' => 'TIEMPO CREADO',
                        'ACTION' => 'ACCIÓN',
                        'Addons' => 'Addons',
                        'USETEMPLATE' => 'PLACA DE USUARIO',
                        'CREATENEWMAPPING' => 'CREATE NEW MAPPING',
                        'BACK' => 'ESPALDA',
                        'ADVANCEDMODE' => 'MODO AVANZADO',
                        'SIMPLEMODE' => 'MODO SIMPLE',
                        'ThisfeatureisavailableinWPUltimateCSVImporterPremiumVersion' => 'Esta función está disponible en la versión Premium de WP Ultimate CSV Importer',
                        'DRAGDROPMODE' => 'DRAG & DROP MODE',
                        'WordpressFields' => 'Campos de Wordpress',
                        'WPFIELDS' => 'Campos de WP',
                        'CSVHEADER' => 'Encabezado CSV',
                        'Action' => 'Acción',
                        'Name' => 'Nombre',
                        'HINT' => 'INSINUACIÓN',
                        'Example' => 'Ejemplo',
                        'WordPressCoreFields' => 'Campos centrales de WordPress',
                        'ACFFreeFields' => 'Campos libres de ACF',
                        'ACFFields' => 'Campos de ACF',
                        'ACFGroupFields' => 'Campos del grupo ACF',
                        'ACFProFields' => 'ACF Pro Fields',
                        'ACFRepeaterFields' => 'Campos repetidores ACF',
                        'TypesCustomFields' => 'Tipos de campos personalizados',
                        'PodsFields' => 'Campos de vainas',
                        'JobListingFields' => 'Campos de listado de trabajos',
                        'CustomFieldSuite' => 'Suite de campo personalizada',
                        'AllInOneSeoFields' => 'Todo en uno Seo Fields',
                        'MetaBoxFields' => 'Campos de MetaBox',
                        'YoastSeoFields' => 'Yoast Seo Fields',
                        'RankMathFields'=>'Rank Math Fields',
                        'RankMathProFields'=>'Rank Math Pro Fields',
                        'BillingAndShippingInformation' => 'Información de facturación y envío',
                        'CustomFieldsWPMemberFields' => 'Campos personalizados Campos de miembros de WP',
                        'CustomFieldsMemberFields' => 'Campos personalizados Campos de miembros',
                         'ProductMetaFields' => 'Meta campos del producto',
                        'ProductAttrFields' => 'Campos de atributo de producto',
                        'ProductBundleMetaFields' => 'Campos meta del paquete de productos',
                        'OrderMetaFields' => 'Ordenar metacampos',
                        'CouponMetaFields' => 'Cupón Meta Fields',
                        'RefundMetaFields' => 'Reembolsar Meta Fields',
                        'WPECommerceCustomFields' => 'Campos personalizados de comercio electrónico de WP',
                        'EventsManagerFields' => 'Campos del administrador de eventos',
                        'WPMLFields' => 'Campos WPML',
                        'CMB2CustomFields' => 'Campos personalizados CMB2',
                        'JetEngineFields' => 'Campos de motores a reacción',
                        'JetEngineRFFields' => 'Campos de repetidores de motores a reacción',
                        'JetEngineCPTFields' => 'Campos CPT de motores a reacción',
                        'JetEngineCPTRFFields' => 'Campos de repetidor CPT de motor a reacción',
                        'JetEngineTaxonomyFields' => 'Campos de taxonomía de motores a reacción',
                        'JetEngineTaxonomyRFFields' => 'Campos de repetidor de taxonomía de motores a reacción',
                        'JetEngineRelationsFields' => 'Campos de relaciones con motores a reacción',                        
                        'Found' => 'Encontrada',
                        'Thisfeatureisavailable' => 'Esta función está disponible en',
                        'PremiumVersion' => 'Versión Premium',
                        'ContactusforPresaleEnquiry' => 'Contáctenos para consultas de preventa',
                        'CourseSettingsFields' => 'CursoAjustesCampos',
                        'CurriculumSettingsFields' => 'Campos de configuración curricular',
                        'QuizSettingsFields' => 'Campos de configuración del cuestionario',
                        'LessonSettingsFields' => 'Campos de configuración de la lección',
                        'QuestionSettingsFields' => 'Campos de configuración de preguntas',
                        'OrderSettingsFields' => 'Campos de configuración de pedidos',
                        'WordPressCustomFields' => 'Campos personalizados de WordPress',
                        'TermsandTaxonomies' => 'Términos y taxonomías',
                        'IsSerialized' => 'Iserializado',
                        'NoCustomFieldsFound' => 'No se encontraron campos personalizados',
                        'MediaUploadFields' => 'Campos de carga de medios',
                        'UploadMedia' => 'Subir medios',
                        'UploadedListofFiles' => 'Lista de archivos cargados',
                        'UploadedMediaFileLists' => 'Listas de archivos multimedia subidos',
                        'SavethismappingasTemplate' => 'Guardar este mapa como plantilla',
                        'CreateTopic' => 'Crear tema',
                        'Save' => 'Salvar',
                        'Createasupport' => 'Cree un tema de soporte aquí para obtener ayuda',
                        'toaform' => 'para apoyar el foro',
                        'Doyouneedtoupdatethecurrentmapping' => '¿Necesita actualizar la asignación actual?',
                        'Savethecurrentmappingasnewtemplate' => 'Guardar la asignación actual como nueva plantilla ',
                        'Back' => 'atrás',
                        'Size' => 'Talla',
                        'subcribe' => 'Suscribir',
                        'Learnfrom' => 'Aprenda de las publicaciones de nuestro blog',
                        'TechnicalDocumentation' => 'Documentación técnica',
                        'Getsample' => 'Obtenir un exemple et un fichier d exemple',
                        'MediaHandling' => 'Imagen destacada Manejo de medios',
                        'Downloadexternalimagestoyourmedia' => 'Descarga imágenes externas a tus medios',
                        'ImageHandling' => 'Manejo de imagen',
                        'Usemediaimagesifalreadyavailable' => 'Use imágenes multimedia si ya están disponibles',
                        'Doyouwanttooverwritetheexistingimages' => '¿Desea sobrescribir las imágenes existentes?',
                        'ImportanybulkWooCommerceProductsdatainCSV' => 'Importe cualquier dato masivo de productos de WooCommerce en CSV',
                        'importUser' => 'importar información de usuario en WordPress a granel.',
                        'ImportUsers' => 'Importar usuarias',
                        'WooCommerceProducts' => 'Productos WooCommerce',
                        'WooCommerceCoupons' => 'Cupones WooCommerce',
                        'WooCommerceOrders' => 'Pedidos Woo-Commerce',
                        'WooCommerceVariations' => 'Variaciones de Woo-Commerce',
                        'WooCommerceRefunds' => 'Reembolsos de Woo-Commerce',
                        'WPMembers' => 'Compatibilidad con complementos de WP-Members',
                        'Highlights' => 'Reflejos',
                        'Defaultcustom' => 'Importación de campos personalizados predeterminados',
                        'Sendsautomated' => 'Envía un correo electrónico de notificación de contraseña automatizado (opcional)',
                        'AlreadyInstalled' => 'Ya instalada',
                        'Exportallyou' => 'Exporte todos sus datos de WordPress como archivo CSV para respaldo',
                        'install'  => 'Instalar',
                        'SupportsUTF' => 'Admite archivos CSV UTF-8',
                        'Duplicatedetection' => 'Detección de duplicados',
                        'FileType' => 'Tipo de archivo',
                        'ProductTypes' => 'Tipos de productos simples, agrupados,
                        importación variable, de tipo externo.',
                        'FeaturedProductImport' => 'Importación de productos destacados desde URL',
                        'Galleryimage' => 'Importación de imágenes de la galería',
                        'ImageSizes' => 'Tamaños de imagen',
                        'Thumbnail' => 'Miniatura',
                        'Medium' => 'Medio',
                        'MediumLarge' => 'Mediano grande',
                        'Large' => 'Grande',
                        'Custom' => 'Personalizada',
                        'Slug' => 'Babosa',
                        'Width' => 'Anchura',
                        'Height' => 'Altura',
                        'Addcustomsizes' => 'Agregar tamaños personalizados',
                        'PostContentImageOption' => 'Opciones de imagen de contenido de publicación',
                        'DownloadPostContentExternalImagestoMedia' => 'Descargar PostContentExternalImagestoMedia',
                        'MediaSEOAdvancedOptions' => 'SEO de medios y opciones avanzadas',
                        'polylangfields'=>'Campos de configuración de Polylang',
                        'SetimageTitle' => 'Establecer título de imagen',
                        'SetimageCaption' => 'Establecer título de imagen',
                        'SetimageAltText' => 'Establecer imagen texto alternativo',
                        'SetimageDescription' => 'Establecer imagen Descripción',
                        'Changeimagefilenameto' => 'Cambiar el nombre del archivo de imagen a',
                        'ImportconfigurationSection' => 'Sección de configuración de importación',
                        'EnablesafeprestateRollback' => 'Habilitar reversión segura',
                        'Backupbeforeimport' => 'Copia de seguridad antes de importar',
                        'DoyouwanttoSWITCHONMaintenancemodewhileimport' => '¿Desea ENCENDER el modo de mantenimiento mientras importa',
                        'Doyouwanttohandletheduplicateonexistingrecords' => '¿Desea manejar el duplicado en los registros existentes?',
                        'Mentionthefieldswhichyouwanttohandleduplicates' => 'Mencione los campos que desea manejar duplicados',
                        'DoyouwanttoUpdateanexistingrecords' => '¿Desea actualizar un registro existente?',
                        'Updaterecordsbasedon' => 'Actualizar registros basados ​​en',
                        'DeletedatafromWordPress' => 'Eliminar datos de WordPress',
                        'EnabletodeletetheitemsnotpresentinCSVXMLfile' => 'Habilite para eliminar los elementos que no están presentes en el archivo CSV / XML',
                        'DoyouwanttoSchedulethisImport' => '¿Desea programar esta importación?',
                        'ScheduleDate' => 'Fecha de programacion',
                        'ScheduleFrequency' => 'Horario Frecuencia',
                        'TimeZone' => 'Zona horaria',
                        'ScheduleTime' => 'Tiempo programado',
                        'Schedule' => 'Calendario',
                        'Import' => 'Importar',
                        'Format' => 'Formato',
                        'OneTime' => 'Una vez',
                        'Daily' => 'Diario',
                        'Weekly' => 'Semanal',
                        'Monthly' => 'Mensual',
                        'Hourly' => 'Cada hora',
                        'Every30mins' => 'Cada 30 minutos',
                        'Every15mins' => 'Cada 15 minutos',
                        'Every10mins' => 'Cada 10 minutos',
                        'Every5mins' => 'Cada 5 minutos',
                        'FileName' => 'Nombre del archivo',
                        'FileSize' => 'Tamaño del archivo',
                        'Process' => 'Proceso',
                        'Totalnoofrecords' => 'No total de registros',
                        'CurrentProcessingRecord' => 'Registro de procesamiento actual',
                        'RemainingRecord' => 'Registro restante',
                        'Completed' => 'Terminada',
                        'TimeElapsed' => 'Tiempo transcurrido',
                        'approximate' => 'aproximada',
                        'DownloadLog' => 'Ver registro',
                        'NoRecord' => 'Sin registro',
                        'UploadedCSVFileLists' => 'Listas de archivos CSV cargados',
                        'Hostname' => 'Nombre de host',
                        'HostPort' => 'Puerto host',
                        'HostUsername' => 'Nombre de usuario del host',
                        'HostPassword' => 'HostPassword',
                        'HostPath' => 'HostPath',
                        'DefaultPort' => 'Puerto predeterminado',
                        'FTPUsername' => 'Nombre de usuario FTP',
                        'FTPPassword' => 'Contraseña FTP',
                        'ConnectionType' => 'Tipo de conección',
                        'ImportersActivity' => 'Actividad de importadores',
                        'ImportStatistics' => 'Estadísticas de importación',
                        'FileManager' => 'Administrador de archivos',
                        'SmartSchedule' => 'Horario inteligente',
                        'ScheduledExport' => 'Exportación programada',
                        'Templates' => 'Plantillas',
                        'LogManager' => 'Gerente de registro',
                        'NotSelectedAnyTab' => 'No seleccionado ninguna pestaña',
                        'EventInfo' => 'Información del evento',
                        'EventDate' => 'Fecha del evento',
                        'EventStatus' => 'Estado del evento',
                        'Actions' => 'Comportamiento',
                        'Date' => 'Fecha',
                        'Purpose' => 'Propósito',
                        'Revision' => 'Revisión',
                        'Select' => 'Seleccionar',
                        'Inserted' => 'Insertada',
                        'Updated' => 'Actualizada',
                        'Skipped' => 'Omitida',
                        'Delete' => 'Eliminar',
                        'Noeventsfound' => 'No se encontraron eventos.',
                        'ScheduleInfo' => 'Información del horario',
                        'ScheduledDate' => 'Cita agendada',
                        'ScheduledTime' => 'Hora programada',
                        'Youhavenotscheduledanyevent' => 'No has programado ningún evento',
                        'Frequency' => 'Frecuencia',
                        'Time' => 'Hora',
                        'EditSchedule' => 'Editar horario',
                        'SaveChanges' => 'Guardar cambios',
                        'TemplateInfo' => 'Información de plantilla',
                        'TemplateName' => 'Nombre de la plantilla',
                        'Module' => 'Módulo',
                        'CreatedTime' => 'Tiempo creado',
                        'NoTemplateFound' => 'No se encontró plantilla',
                        'Download' => 'Descargar',
                        'NoLogRecordFound' => 'No se encontró registro de registro',
                        'GeneralSettings' => 'Configuración general',
                        'DatabaseOptimization' => 'Optimización de bases de datos',
                        'SecurityandPerformance' => 'Seguridad y rendimiento',
                        'Documentation' => 'Documentación',
                        'MediaReport' => 'Informe de medios',
                        'DropTable' => 'Mesa plegable',
                        'Ifenabledplugindeactivationwillremoveplugindatathiscannotberestored' => 'Si la desactivación activada del complemento eliminará los datos del complemento, esto no se puede restaurar.',
                        'Scheduledlogmails' => 'Correos de registro programados',
                        'Enabletogetscheduledlogmails' => 'Habilite para obtener correos de registro programados.',
                        'Sendpasswordtouser' => 'Enviar contraseña al usuario',
                        'Enabletosendpasswordinformationthroughemail' => 'Habilitar para enviar información de contraseña por correo electrónico.',
                        'WoocommerceCustomattribute' => 'Atributo personalizado de Woocommerce',
                        'Enablestoregisterwoocommercecustomattribute' => 'Permite registrar el atributo personalizado de woocommerce.',
                        'PleasemakesurethatyoutakenecessarybackupbeforeproceedingwithdatabaseoptimizationThedatalostcantbereverted' => 'Asegúrese de realizar la copia de seguridad necesaria antes de continuar con la optimización de la base de datos. Los datos perdidos no se pueden revertir.',
                        'DeleteallorphanedPostPageMeta' => 'Eliminar todas las publicaciones huérfanas / meta de página',
                        'Deleteallunassignedtags' => 'Eliminar todas las etiquetas no asignadas',
                        'DeleteallPostPagerevisions' => 'Eliminar todas las revisiones de publicaciones / páginas',
                        'DeleteallautodraftedPostPage' => 'Eliminar todas las publicaciones / páginas con borrador automático',
                        'DeleteallPostPageintrash' => 'Eliminar todas las publicaciones / páginas en la papelera',
                        'DeleteallCommentsintrash' => 'Eliminar todos los comentarios en la papelera',
                        'DeleteallUnapprovedComments' => 'Eliminar todos los comentarios no aprobados',
                        'DeleteallPingbackComments' => 'Eliminar todos los comentarios de Pingback',
                        'DeleteallTrackbackComments' => 'Eliminar todos los comentarios de Trackback',
                        'DeleteallSpamComments' => 'Eliminar todos los comentarios de spam',
                        'RunDBOptimizer' => 'Ejecute DB Optimizer',
                        'Comments' =>'Comentarios',
                        'CustomerReviews' => 'Valoración de los clientes',
                        'DatabaseOptimizationLog' => 'Registro de optimización de base de datos',
                        'noofOrphanedPostPagemetahasbeenremoved' => 'No se ha eliminado ninguna meta de publicación / página huérfana.',
                        'noofUnassignedtagshasbeenremoved' => 'ninguna de las etiquetas sin asignar ha sido eliminada.',
                        'noofPostPagerevisionhasbeenremoved' => 'No se ha eliminado ninguna de las revisiones de publicaciones / páginas.',
                        'noofAutodraftedPostPagehasbeenremoved' => 'no Se ha eliminado la publicación / página de borrador automático.',
                        'noofPostPageintrashhasbeenremoved' => 'No se ha eliminado ninguna publicación / página en la papelera.',
                        'noofSpamcommentshasbeenremoved' => 'ninguno de los comentarios de spam ha sido eliminado.',
                        'noofCommentsintrashhasbeenremoved' => 'No se ha eliminado ningún comentario en la papelera.',
                        'noofUnapprovedcommentshasbeenremoved' => 'ninguno de los comentarios no aprobados ha sido eliminado.',
                        'noofPingbackcommentshasbeenremoved' => 'ninguno de los comentarios de Pingback ha sido eliminado.',
                        'noofTrackbackcommentshasbeenremoved' => 'ninguno de los comentarios de Trackback ha sido eliminado.',
                        'Allowauthorseditorstoimport' => 'Permitir a los autores / editores importar',
                        'Allowauthorseditorstoimport' => 'Apermitir a los autores / editores importar',
                        'Thisenablesauthorseditorstoimport' => 'Esto permite a los autores / editores importar.',
                        'MinimumrequiredphpinivaluesIniconfiguredvalues' => 'Valores mínimos requeridos de php.ini (valores configurados INI)',
                        'Variables' => 'Variables',
                        'SystemValues' => 'Valores del sistema',
                        'MinimumRequirements' => 'Requerimientos mínimos',
                        'RequiredtoenabledisableLoadersExtentionsandmodules' => 'Necesario para habilitar / deshabilitar cargadores, extensiones y módulos:',
                        'DebugInformation' => 'Información de depuración:',
                        'SmackcodersGuidelines' => 'Pautas de Smackcoders',
                        'DevelopmentNews' => 'Pautas de Smackcoders',
                        'WhatsNew' => '¿Qué hay de nuevo?',
                        'YoutubeChannel' => 'Canal de Youtube',
                        'OtherWordPressPlugins' => 'Otros complementos de WordPress',
                        'Count' => 'Contar',
                        'ImageType' => 'Tipo de imagen',
                        'Status' => 'Estado',
                        'Loading' => 'Cargando',
                        'LoveWPUltimateCSVImporterGivea5starreviewon' => 'Importador de Love WP Ultimate CSV, opina sobre 5 estrellas en',
                        'ContactSupport' => 'Soporte de contacto',
                        'Email' => 'Email',
                        'Supporttype' => 'Tipo de soporte',
                        'BugReporting' => 'Informe de errores',
                        'FeatureEnhancement' => 'Mejora de funciones',
                        'Message' => 'Mensaje',
                        'Send' => 'Enviar',
                        'NewsletterSubscription' => 'Boletín de suscripción',
                        'Subscribe' => 'Suscribir',
                        'Note' => 'Nota',
                        'SubscribetoSmackcodersMailinglistafewmessagesayear' => 'Suscríbase a la lista de correo de Smackcoders (algunos mensajes al año)',
                        'Pleasedraftamailto' => 'Por favor, redacte un correo a',
                        'Ifyoudoesnotgetanyacknowledgementwithinanhour' => '¡Si no recibe ningún reconocimiento dentro de una hora!',
                        'Selectyourmoduletoexportthedata' => 'Seleccione su módulo para exportar datos',
                        'Toexportdatabasedonthefilters' => 'Para exportar datos basados ​​en los filtros',
                        'ExportFileName' => 'Exportar nombre de archivo',
                        'AdvancedSettings' => 'Ajustes avanzados',
                        'ExportType' => 'Tipo de exportación',
                        'SplittheRecord' => 'Dividir el registro',
                        'AdvancedFilters' => 'Filtros avanzados',
                        'Exportdatawithautodelimiters' => 'Exportar datos con delimitadores automáticos',
                        'Delimiters' => 'Delimitadores',
                        'OtherDelimiters' => 'Otros delimitadores',
                        'Exportdataforthespecificperiod' => 'Exportar datos para el período específico',
                        'StartFrom' => 'Empezar desde',
                        'EndTo' => 'Fin a',
                        'Exportdatawiththespecificstatus' => 'Exportar datos con el estado específico',
                        'All' => 'Todas',
                        'Publish' => 'Publicar',
                        'Sticky' => 'Pegajosa',
                        'Private' => 'Privada',
                        'Protected' => 'Protegida',
                        'Draft' => 'Sequía',
                        'Pending' => 'Pendiente',
                        'Exportdatabyspecificauthors' => 'Exportar datos por autores específicos',
                        'Authors' => 'Autoras',
                        'ExportdatabasedonspecificInclusions' => 'Exportar datos basados ​​en inclusiones específicas',
                        'DoyouwanttoSchedulethisExport' => '¿Desea programar esta exportación?',
                        'SelectTimeZone' => 'Selecciona la zona horaria',
                        'ScheduleExport' => 'Exportación programada',
                        'DataExported' => 'Datos exportados',
                        'FilePath' => 'Ruta de archivo',
                        'UltimateCSVImporterPro' => 'Importador UltimateCSV Pro',
			'loginfo' => 'información de registro',
			'Thisfeatureisavailablein' => 'Esta función está disponible en',
			'WPUltimateCSVImporter' => 'Importador de CSV de WP Ultimate',
			'SampleCSV' => 'CSV de muestra',
			'Poweredby' => 'Energizado por',
			'importwoocommerce' => 'importar woocommerce',
			'ProductTypessimplegroupedvariableexternaltypeimport' => 'Importación de tipo de producto simple, agrupado, variable, externo.',
			'FeaturedProductImportfromURL' => 'Importación de productos destacados desde URL',
			'Galleryimageimport' => 'Importación de imágenes de la galería',
			'SupportsUTF_8CSVfile' => 'Admite archivos CSV UTF-8',
			'Install' => 'Instalar',
			'ImportUserinfointoWordPressinbulk' => 'Importar información de usuario a WordPress de forma masiva',
			'WPMembersaddonsupport' => 'Compatibilidad con complementos de WP-Members',
			'Defaultcustomfieldsimport' => 'Importación de campos personalizados predeterminados',
			'Sendsautomatedpasswordnotificationemailoptional' => 'Envía un correo electrónico de notificación de contraseña automatizado (opcional)',
			'WPUltimateExporter' => 'Exportador definitivo de WP',
			'ExportallyourWordPressdataasCSVfileforbackup' => 'Exporte todos sus datos de WordPress como archivo CSV para hacer una copia de seguridad',
			'Supportsdefaultcustomfields' => 'Admite campos personalizados predeterminados',
			'UTF8encodedCSVfile' => 'Archivo CSV codificado en UTF-8',
			'SupportPostPageCustomPost' => 'Publicación de soporte, página y publicación personalizada',
			'Filteredexportbasedonperiodoftimeauthors' => 'Exportación filtrada basada en período de tiempo y autores',
			'Users' => 'Usuarias',
			'Getsampleandexamplefiles' => 'Obtener archivos de muestra y de ejemplo',
			'PleaseinstalltheUltimateExportertoexportallyourWordPressdataasCSV' => 'Instale Ultimate Exporter para exportar todos sus datos de WordPress como CSV',
			'Clickheretoinstall' => 'Haga clic aquí para instalar',
			'poweredBy' => 'Energizado por',
			'Hire_us' => 'Contratanos',
			'DragDropyourfilesor' => 'Arrastra y suelta tus archivos o',
                        'WPCompleteFields' =>'Campos completos de WP',

                );
                return $response;
        }
        public static function notice_contents()
        {
        $result =array(
        'UpgradetoPROusingcode'  =>'Actualizar a PRO con el código',
        'Unlockfeatureslikebulkimportadvanced exportschedulingcontentupdatemorepluslifetimesupport'  =>'Desbloquea funciones como la importación masiva, la exportación avanzada, la programación, la actualización de contenidos y mucho más, además de soporte técnico de por vida',
        'upgradenow' =>  'actualizar ahora'
        );
        return $result;
        }
}

