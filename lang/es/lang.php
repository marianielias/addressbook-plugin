<?php

return [
    'plugin' => [
        'name' => 'Libreta de direcciones',
        'description' => 'Un administrador de libreta de direcciones',
    	'access' => 'Administrar Plugin de Libreta de Direcciones',
    ],
	'fields' => [
		'name' => 'Nombre',
		'birthday' => 'Cumpleaños',
		'address' => 'Dirección',
		'telephone' => 'Teléfono',
		'email' => 'E-Mail',
		'short_description' => 'Descripción corta',
	],
	'person_component' => [
		'name' => 'Componente de Persona',
		'description' => 'Muestra información de una persona.',
		'slug' => 'Alias',
		'addressbook_page' => 'Página de la libreta',
		'return_to_addressbook' => 'Volver a la libreta',
	],
	'addressbook_component' => [
		'name' => 'Componente de Libreta de Direcciones',
		'addressbook' => 'Libreta de direcciones',
		'description' => 'Muestra la libreta de direcciones.',
		'results_per_page' => 'Resultados por página',
		'person_page' => 'Página de persona',
	],
	'people' => [
		'menu_label' => 'Personas',
		'person' => 'Persona',
		'create_person' => 'Crear persona',
		'edit_person' => 'Editar persona',
		'preview_person' => 'Previsualizar persona',
		'manage_people' => 'Administrar personas',
		'new_person' => 'Nueva persona',
		'return_to_people_list' => 'Volver a la lista de personas',
		'success_delete' => 'Personas borradas de forma satisfactoria.',
	],
	'common' => [
		'create_and_close' => 'Crear y cerrar',
		'save_and_close' => 'Guardar y cerrar',
		'save' => 'Guardar',
		'create' => 'Crear',
		'cancel' => 'Cancelar',
		'are_you_sure' => '¿Está seguro de que desea proceder?',
		'delete_selected' => 'Borrar seleccionados',
		'of' => 'de',
	],
];
