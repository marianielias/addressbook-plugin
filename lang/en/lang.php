<?php

return [
    'plugin' => [
        'name' => 'Address book',
        'description' => 'An Address book management plugin.',
    	'access' => 'Manage AddressBook Plugin',
    ],
	'fields' => [
		'name' => 'Name',
		'birthday' => 'Birthday',
		'address' => 'Address',
		'telephone' => 'Telephone',
		'email' => 'E-Mail',
		'short_description' => 'Short Description',
	],
	'person_component' => [
		'name' => 'Person Component',
		'description' => 'Shows information of a person.',
		'slug' => 'Alias',
		'addressbook_page' => 'Address book Page',
		'return_to_addressbook' => 'Return to Address Book',
	],
	'addressbook_component' => [
		'name' => 'Address book Component',
		'addressbook' => 'Address Book',
		'description' => 'Shows the Address book.',
		'results_per_page' => 'Results per page',
		'person_page' => 'Person Page',
	],
	'people' => [
		'menu_label' => 'People',
		'person' => 'Person',
		'create_person' => 'Create Person',
		'edit_person' => 'Edit Person',
		'preview_person' => 'Preview Person',
		'manage_people' => 'Manage People',
		'new_person' => 'New Person',
		'return_to_people_list' => 'Return to people list',
		'success_delete' => 'Successfully deleted those people.',
	],
	'common' => [
		'create_and_close' => 'Create and Close',
		'save_and_close' => 'Save and Close',
		'save' => 'Save',
		'create' => 'Create',
		'cancel' => 'Cancel',
		'are_you_sure' => 'Are you sure you want to proceed?',
		'delete_selected' => 'Delete Selected',
		'of' => 'of',
	],
];
