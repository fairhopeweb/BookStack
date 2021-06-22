<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Recientemente creado',
    'recently_created_pages' => 'Páginas recientemente creadas',
    'recently_updated_pages' => 'Páginas recientemente actualizadas',
    'recently_created_chapters' => 'Capítulos recientemente creados',
    'recently_created_books' => 'Libros recientemente creados',
    'recently_created_shelves' => 'Estantes recientemente creados',
    'recently_update' => 'Recientemente actualizado',
    'recently_viewed' => 'Recientemente visto',
    'recent_activity' => 'Actividad reciente',
    'create_now' => 'Crear uno ahora',
    'revisions' => 'Revisiones',
    'meta_revision' => 'Revisión #:revisionCount',
    'meta_created' => 'Creado :timeLength',
    'meta_created_name' => 'Creado :timeLength por :user',
    'meta_updated' => 'Actualizado :timeLength',
    'meta_updated_name' => 'Actualizado :timeLength por :user',
    'meta_owned_name' => 'Propiedad de :user',
    'entity_select' => 'Seleccione entidad',
    'images' => 'Imágenes',
    'my_recent_drafts' => 'Mis borradores recientes',
    'my_recently_viewed' => 'Mis visualizaciones recientes',
    'my_most_viewed_favourites' => 'Mis favoritos más vistos',
    'my_favourites' => 'Mis favoritos',
    'no_pages_viewed' => 'No ha visto ninguna página',
    'no_pages_recently_created' => 'Ninguna página ha sido creada recientemente',
    'no_pages_recently_updated' => 'Ninguna página ha sido actualizada recientemente',
    'export' => 'Exportar',
    'export_html' => 'Archivo web',
    'export_pdf' => 'Archivo PDF',
    'export_text' => 'Archivo de texto',
    'export_md' => 'Markdown File',

    // Permissions and restrictions
    'permissions' => 'Permisos',
    'permissions_intro' => 'Una vez habilitado, estos permisos tendrán prioridad por encima de cualquier permiso establecido.',
    'permissions_enable' => 'Habilitar permisos personalizados',
    'permissions_save' => 'Guardar permisos',
    'permissions_owner' => 'Propietario',

    // Search
    'search_results' => 'Resultados de búsqueda',
    'search_total_results_found' => 'Se han encontrado :count resultados|Se han encontrado :count resultados en total',
    'search_clear' => 'Limpiar resultados',
    'search_no_pages' => 'Ninguna página encontrada para la búsqueda',
    'search_for_term' => 'Búsqueda por :term',
    'search_more' => 'Más Resultados',
    'search_advanced' => 'Búsqueda Avanzada',
    'search_terms' => 'Términos de búsqueda',
    'search_content_type' => 'Tipo de Contenido',
    'search_exact_matches' => 'Coincidencias Exactas',
    'search_tags' => 'Búsquedas Etiquetadas',
    'search_options' => 'Opciones',
    'search_viewed_by_me' => 'Vistas por mí',
    'search_not_viewed_by_me' => 'No vistas por mí',
    'search_permissions_set' => 'Permisos ajustados',
    'search_created_by_me' => 'Creadas por mí',
    'search_updated_by_me' => 'Actualizadas por mí',
    'search_owned_by_me' => 'De mi propiedad',
    'search_date_options' => 'Opciones de fecha',
    'search_updated_before' => 'Actualizadas antes de',
    'search_updated_after' => 'Actualizadas después de',
    'search_created_before' => 'Creadas antes de',
    'search_created_after' => 'Creadas después de',
    'search_set_date' => 'fecha',
    'search_update' => 'Actualizar Búsqueda',

    // Shelves
    'shelf' => 'Estante',
    'shelves' => 'Estantes',
    'x_shelves' => ':count estante|:count estantes',
    'shelves_long' => 'Estantes',
    'shelves_empty' => 'No hay estantes creados',
    'shelves_create' => 'Crear estante',
    'shelves_popular' => 'Estantes populares',
    'shelves_new' => 'Estantes nuevos',
    'shelves_new_action' => 'Nuevo estante',
    'shelves_popular_empty' => 'Los estantes más populares aparecerán aquí.',
    'shelves_new_empty' => 'Los libros más recientes aparecerán aquí.',
    'shelves_save' => 'Guardar estante',
    'shelves_books' => 'Libros en este estante',
    'shelves_add_books' => 'Añadir libros a este estante',
    'shelves_drag_books' => 'Arrastra libros aquí para añadirlos a este estante',
    'shelves_empty_contents' => 'Este estante no tiene libros asignados',
    'shelves_edit_and_assign' => 'Editar el estante para asignar libros',
    'shelves_edit_named' => 'Editar estante :name',
    'shelves_edit' => 'Editar estante',
    'shelves_delete' => 'Borrar estante',
    'shelves_delete_named' => 'Borrar estante :name',
    'shelves_delete_explain' => "Esto borrará el estante con el nombre ':name'. Los libros que contenga no se borrarán.",
    'shelves_delete_confirmation' => '¿Está seguro de que desea borrar este estante?',
    'shelves_permissions' => 'Permisos del estante',
    'shelves_permissions_updated' => 'Permisos del estante actualizados',
    'shelves_permissions_active' => 'Permisos del estante activos',
    'shelves_copy_permissions_to_books' => 'Copiar permisos a los libros',
    'shelves_copy_permissions' => 'Copiar permisos',
    'shelves_copy_permissions_explain' => 'Esto aplicará los ajustes de permisos de este estante para todos sus libros. Antes de activarlo, asegúrese de que todos los cambios de permisos para este estante han sido guardados.',
    'shelves_copy_permission_success' => 'Permisos del estante copiados a :count libros',

    // Books
    'book' => 'Libro',
    'books' => 'Libros',
    'x_books' => ':count Libro|:count Libros',
    'books_empty' => 'No hay libros creados',
    'books_popular' => 'Libros populares',
    'books_recent' => 'Libros recientes',
    'books_new' => 'Libros nuevos',
    'books_new_action' => 'Nuevo Libro',
    'books_popular_empty' => 'Los libros más populares aparecerán aquí.',
    'books_new_empty' => 'Los libros más recientes aparecerán aquí.',
    'books_create' => 'Crear nuevo libro',
    'books_delete' => 'Borrar libro',
    'books_delete_named' => 'Borrar libro :bookName',
    'books_delete_explain' => 'Esto borrará el libro con el nombre \':bookName\', Todos las páginas y capítulos serán borrados.',
    'books_delete_confirmation' => '¿Está seguro de que desea borrar este libro?',
    'books_edit' => 'Editar Libro',
    'books_edit_named' => 'Editar Libro :bookName',
    'books_form_book_name' => 'Nombre de libro',
    'books_save' => 'Guardar libro',
    'books_permissions' => 'Permisos del libro',
    'books_permissions_updated' => 'Permisos del libro actualizados',
    'books_empty_contents' => 'Ninguna página o capítulo ha sido creada para este libro.',
    'books_empty_create_page' => 'Crear una nueva página',
    'books_empty_sort_current_book' => 'Organizar el libro actual',
    'books_empty_add_chapter' => 'Agregar un capítulo',
    'books_permissions_active' => 'Permisos de libro activos',
    'books_search_this' => 'Buscar en este libro',
    'books_navigation' => 'Navegación de libro',
    'books_sort' => 'Organizar contenido de libro',
    'books_sort_named' => 'Organizar libro :bookName',
    'books_sort_name' => 'Organizar por Nombre',
    'books_sort_created' => 'Organizar por Fecha de creación',
    'books_sort_updated' => 'Organizar por Fecha de modificación',
    'books_sort_chapters_first' => 'Capítulos al inicio',
    'books_sort_chapters_last' => 'Capítulos al final ',
    'books_sort_show_other' => 'Mostrar otros libros',
    'books_sort_save' => 'Guardar nuevo orden',

    // Chapters
    'chapter' => 'Capítulo',
    'chapters' => 'Capítulos',
    'x_chapters' => ':count Capítulo|:count Capítulos',
    'chapters_popular' => 'Capítulos populares',
    'chapters_new' => 'Nuevo capítulo',
    'chapters_create' => 'Crear nuevo capítulo',
    'chapters_delete' => 'Borrar capítulo',
    'chapters_delete_named' => 'Borrar capítulo :chapterName',
    'chapters_delete_explain' => 'Esto eliminará el capítulo con el nombre \':chapterName\'. También se eliminarán todas las páginas que existen dentro de este capítulo.',
    'chapters_delete_confirm' => '¿Está seguro de borrar este capítulo?',
    'chapters_edit' => 'Editar capítulo',
    'chapters_edit_named' => 'Editar capítulo :chapterName',
    'chapters_save' => 'Guardar capítulo',
    'chapters_move' => 'Mover capítulo',
    'chapters_move_named' => 'Mover Capítulo :chapterName',
    'chapter_move_success' => 'Capítulo movido a :bookName',
    'chapters_permissions' => 'Permisos de capítulo',
    'chapters_empty' => 'No existen páginas en este capítulo.',
    'chapters_permissions_active' => 'Permisos de capítulo activos',
    'chapters_permissions_success' => 'Permisos de capítulo actualizados',
    'chapters_search_this' => 'Buscar este capítulo',

    // Pages
    'page' => 'Página',
    'pages' => 'Páginas',
    'x_pages' => ':count Página|:count Páginas',
    'pages_popular' => 'Páginas populares',
    'pages_new' => 'Nueva página',
    'pages_attachments' => 'Adjuntos',
    'pages_navigation' => 'Navegación de página',
    'pages_delete' => 'Borrar página',
    'pages_delete_named' => 'Borrar página :pageName',
    'pages_delete_draft_named' => 'Borrar borrador de página :pageName',
    'pages_delete_draft' => 'Borrar borrador de página',
    'pages_delete_success' => 'Página borrada',
    'pages_delete_draft_success' => 'Borrador de página borrado',
    'pages_delete_confirm' => '¿Está seguro de borrar esta página?',
    'pages_delete_draft_confirm' => '¿Está seguro de que desea borrar este borrador de página?',
    'pages_editing_named' => 'Editando página :pageName',
    'pages_edit_draft_options' => 'Opciones de Borrador',
    'pages_edit_save_draft' => 'Guardar borrador',
    'pages_edit_draft' => 'Editar borrador de página',
    'pages_editing_draft' => 'Editando borrador',
    'pages_editing_page' => 'Editando página',
    'pages_edit_draft_save_at' => 'Borrador guardado ',
    'pages_edit_delete_draft' => 'Borrar borrador',
    'pages_edit_discard_draft' => 'Descartar borrador',
    'pages_edit_set_changelog' => 'Ajustar Log de cambios',
    'pages_edit_enter_changelog_desc' => 'Introduzca una breve descripción de los cambios que ha realizado',
    'pages_edit_enter_changelog' => 'Entrar al Log de cambios',
    'pages_save' => 'Guardar página',
    'pages_title' => 'Título de página',
    'pages_name' => 'Nombre de página',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Previsualizar',
    'pages_md_insert_image' => 'Insertar Imagen',
    'pages_md_insert_link' => 'Insertar link de entidad',
    'pages_md_insert_drawing' => 'Insertar Dibujo',
    'pages_not_in_chapter' => 'La página no está en un capítulo',
    'pages_move' => 'Mover página',
    'pages_move_success' => 'Página movida a ":parentName"',
    'pages_copy' => 'Copiar página',
    'pages_copy_desination' => 'Destino de la copia',
    'pages_copy_success' => 'Página copiada a correctamente',
    'pages_permissions' => 'Permisos de página',
    'pages_permissions_success' => 'Permisos de página actualizados',
    'pages_revision' => 'Revisión',
    'pages_revisions' => 'Revisiones de página',
    'pages_revisions_named' => 'Revisiones de página para :pageName',
    'pages_revision_named' => 'Revisión de página para :pageName',
    'pages_revision_restored_from' => 'Restaurado de #:id; :summary',
    'pages_revisions_created_by' => 'Creado por',
    'pages_revisions_date' => 'Fecha de revisión',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revisión #:id',
    'pages_revisions_numbered_changes' => 'Revisión #:id Cambios',
    'pages_revisions_changelog' => 'Log de cambios',
    'pages_revisions_changes' => 'Cambios',
    'pages_revisions_current' => 'Versión actual',
    'pages_revisions_preview' => 'Previsualizar',
    'pages_revisions_restore' => 'Restaurar',
    'pages_revisions_none' => 'Esta página no tiene revisiones',
    'pages_copy_link' => 'Copiar Enlace',
    'pages_edit_content_link' => 'Contenido editado',
    'pages_permissions_active' => 'Permisos de página activos',
    'pages_initial_revision' => 'Publicación inicial',
    'pages_initial_name' => 'Página nueva',
    'pages_editing_draft_notification' => 'Está actualmente editando un borrador que fue guardado por última vez el :timeDiff.',
    'pages_draft_edited_notification' => 'Esta página ha sido actualizada desde ese momento. Se recomienda que cancele este borrador.',
    'pages_draft_edit_active' => [
        'start_a' => ':count usuarios han comenzado a editar esta página',
        'start_b' => ':userName ha comenzado a editar esta página',
        'time_a' => 'desde que la página fue actualizada',
        'time_b' => 'en los últimos :minCount minutos',
        'message' => ':start :time. ¡Ten cuidado de no sobreescribir los cambios del otro usuario!',
    ],
    'pages_draft_discarded' => 'Borrador descartado, el editor ha sido actualizado con el contenido de la página actual',
    'pages_specific' => 'Página específica',
    'pages_is_template' => 'Página es plantilla',

    // Editor Sidebar
    'page_tags' => 'Etiquetas de Página',
    'chapter_tags' => 'Etiquetas de Capítulo',
    'book_tags' => 'Etiquetas de Libro',
    'shelf_tags' => 'Etiquetas de Estante',
    'tag' => 'Etiqueta',
    'tags' =>  'Etiquetas',
    'tag_name' =>  'Nombre de la Etiqueta',
    'tag_value' => 'Valor de la etiqueta (Opcional)',
    'tags_explain' => "Agrege algunas etiquetas para mejorar la categorización de su contenido. \n Puede asignar un valor a una etiqueta para una organización a mayor detalle.",
    'tags_add' => 'Agregar otra etiqueta',
    'tags_remove' => 'Eliminar esta etiqueta',
    'attachments' => 'Adjuntos',
    'attachments_explain' => 'Subir ficheros o agregar enlaces para mostrar en la página. Estos son visibles en la barra lateral de la página.',
    'attachments_explain_instant_save' => 'Los cambios son guardados de manera instantánea .',
    'attachments_items' => 'Elementos adjuntados',
    'attachments_upload' => 'Subir Archivo',
    'attachments_link' => 'Adjuntar Enlace',
    'attachments_set_link' => 'Ajustar Enlace',
    'attachments_delete' => '¿Está seguro de que quiere eliminar este archivo adjunto?',
    'attachments_dropzone' => 'Arrastre ficheros aquí o haga click aquí para adjuntar un fichero',
    'attachments_no_files' => 'No se han subido ficheros',
    'attachments_explain_link' => 'Puede agregar un enlace si prefiere no subir un archivo. Puede ser un enlace a otra página o un enlace a un fichero en la nube.',
    'attachments_link_name' => 'Nombre del Enlace',
    'attachment_link' => 'Enlace adjunto',
    'attachments_link_url' => 'Enlace a fichero',
    'attachments_link_url_hint' => 'Url del sitio o fichero',
    'attach' => 'Adjuntar',
    'attachments_insert_link' => 'Añadir enlace al adjunto en la página',
    'attachments_edit_file' => 'Editar fichero',
    'attachments_edit_file_name' => 'Nombre del fichero',
    'attachments_edit_drop_upload' => 'Arrastre a los ficheros o haga click aquí para subir y sobreescribir',
    'attachments_order_updated' => 'Orden de adjuntos actualizado',
    'attachments_updated_success' => 'Detalles de adjuntos actualizados',
    'attachments_deleted' => 'Adjunto borrado',
    'attachments_file_uploaded' => 'Fichero subido éxitosamente',
    'attachments_file_updated' => 'Fichero actualizado éxitosamente',
    'attachments_link_attached' => 'Enlace agregado éxitosamente a la página',
    'templates' => 'Plantillas',
    'templates_set_as_template' => 'La página es una plantilla',
    'templates_explain_set_as_template' => 'Puede ajustar esta página como una plantilla, así su contenido puede emplearse al crear una nueva página. Otros usuarios podrán utilizar esta plantilla si tienen permisos de lectura sobre esta página.',
    'templates_replace_content' => 'Reemplazar el contenido de la página',
    'templates_append_content' => 'Añadir después del contenido de la página',
    'templates_prepend_content' => 'Añadir antes del contenido de la página',

    // Profile View
    'profile_user_for_x' => 'Usuario para :time',
    'profile_created_content' => 'Contenido creado',
    'profile_not_created_pages' => ':userName no ha creado ninguna página',
    'profile_not_created_chapters' => ':userName no ha creado ningún capítulo',
    'profile_not_created_books' => ':userName no ha creado ningún libro',
    'profile_not_created_shelves' => ':userName no ha creado ningún estante',

    // Comments
    'comment' => 'Comentario',
    'comments' => 'Comentarios',
    'comment_add' => 'Añadir Comentario',
    'comment_placeholder' => 'Introduzca su comentario aquí',
    'comment_count' => '{0} Sin Comentarios|{1} 1 Comentario|[2,*] :count Comentarios',
    'comment_save' => 'Guardar comentario',
    'comment_saving' => 'Guardando comentario...',
    'comment_deleting' => 'Borrando comentario...',
    'comment_new' => 'Nuevo Comentario',
    'comment_created' => 'comentado :createDiff',
    'comment_updated' => 'Actualizado :updateDiff por :username',
    'comment_deleted_success' => 'Comentario borrado',
    'comment_created_success' => 'Comentario añadido',
    'comment_updated_success' => 'Comentario actualizado',
    'comment_delete_confirm' => '¿Está seguro de que quiere borrar este comentario?',
    'comment_in_reply_to' => 'En respuesta a :commentId',

    // Revision
    'revision_delete_confirm' => '¿Está seguro de que desea eliminar esta revisión?',
    'revision_restore_confirm' => '¿Está seguro de que desea restaurar esta revisión? El contenido actual de la página será reemplazado.',
    'revision_delete_success' => 'Revisión eliminada',
    'revision_cannot_delete_latest' => 'No se puede eliminar la última revisión.'
];
