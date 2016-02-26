<?php

return [
    'plugin' => [
        'name' => 'Address book',
        'description' => 'An address book management plugin.',
    	'access' => 'Manage Address Book Plugin',
    ],
	'fields' => [
		'name' => 'Name',
		'birthday' => 'Birthday',
		'address' => 'Address',
		'telephone' => 'Telephone',
		'email' => 'E-Mail',
		'short_description' => 'Short description',
	],
	'person_component' => [
		'name' => 'Person component',
		'description' => 'Shows information of a person.',
		'slug' => 'Alias',
		'addressbook_page' => 'Address book page',
		'return_to_addressbook' => 'Return to address book',
	],
	'addressbook_component' => [
		'name' => 'Address Book Component',
		'addressbook' => 'Address book',
		'description' => 'Shows the address book.',
		'results_per_page' => 'Results per page',
		'person_page' => 'Person page',
	],
	'people' => [
		'menu_label' => 'People',
		'person' => 'Person',
		'create_person' => 'Create person',
		'edit_person' => 'Edit person',
		'preview_person' => 'Preview person',
		'manage_people' => 'Manage people',
		'new_person' => 'New person',
		'return_to_people_list' => 'Return to people list',
		'success_delete' => 'Successfully deleted those people.',
	],
	'common' => [
		'create_and_close' => 'Create and close',
		'save_and_close' => 'Save and close',
		'save' => 'Save',
		'create' => 'Create',
		'cancel' => 'Cancel',
		'are_you_sure' => 'Are you sure you want to proceed?',
		'delete_selected' => 'Delete selected',
		'of' => 'of',
	],
];
