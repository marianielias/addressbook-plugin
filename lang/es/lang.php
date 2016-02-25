<?php

return [
    'plugin' => [
        'name' => 'Libreta de Direcciones',
        'description' => 'Un administrador de Libreta de Direcciones',
    	'access' => 'Administrar Plugin Libreta de Direcciones',
    ],
	'fields' => [
		'name' => 'Nombre',
		'birthday' => 'Cumpleaños',
		'address' => 'Direccion',
		'telephone' => 'Telefono',
		'email' => 'E-Mail',
		'short_description' => 'Descripcion Corta',
	],
	'person_component' => [
		'name' => 'Person Component',
		'description' => 'Shows information of a person.',
		'slug' => 'Alias',
		'addressbook_page' => 'Pagina de la Libreta',
		'return_to_addressbook' => 'Volver a la Libreta',
	],
	'addressbook_component' => [
		'name' => 'Address book Component',
		'addressbook' => 'Libreta de Direcciones',
		'description' => 'Shows the Address book.',
		'results_per_page' => 'Resultados por pagina',
		'person_page' => 'Pagina de Persona',
	],
	'people' => [
		'menu_label' => 'Personas',
		'person' => 'Persona',
		'create_person' => 'Crear Persona',
		'edit_person' => 'Editar Persona',
		'preview_person' => 'Previsualizar Persona',
		'manage_people' => 'Administrar Personas',
		'new_person' => 'Nueva Persona',
		'return_to_people_list' => 'Volver a la lista de personas',
		'success_delete' => 'Personas borradas de forma satisfactoria.',
	],
	'common' => [
		'create_and_close' => 'Crear y Cerrar',
		'save_and_close' => 'Guardar y Cerrar',
		'save' => 'Guardar',
		'create' => 'Crear',
		'cancel' => 'Cancelar',
		'are_you_sure' => 'Esta seguro que desea proceder?',
		'delete_selected' => 'Borrar Seleccionados',
		'of' => 'de',
	],
];
