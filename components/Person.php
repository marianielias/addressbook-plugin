<?php namespace Fencus\AddressBook\Components;

use Cms\Classes\ComponentBase;
use Fencus\AddressBook\Models\Person as PersonModel;
use Lang;
use Cms\Classes\Page;

class Person extends ComponentBase
{

	public $person;
	public $addressbookPage;
	
    public function componentDetails()
    {
        return [
            'name'        => 'fencus.addressbook::lang.person_component.name',
            'description' => 'fencus.addressbook::lang.person_component.description'
        ];
    }

    public function defineProperties()
    {
        return [
        		'addressbookPage' => [
        				'title'       => 'fencus.addressbook::lang.addressbook_component.addressbook_page',
        				'type'        => 'dropdown',
        				'default'     => 'addressbook',
        		],
        		'slug' => [
        				'title'       => 'fencus.addressbook::lang.person_component.slug',
        				'default'     => '{{ :slug }}',
        				'type'        => 'string'
        		],
        ];
    }
    
    public function getAddressbookPageOptions()
    {
    	return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
    
    public function onRun()
    {
    	try
    	{
    		$slug = $this->property('slug');
    		$this->person = PersonModel::where('slug', $slug)->firstOrFail();
    		$this->page->title = $this->person->name;
    		$this->addressbookPage = $this->property('addressbookPage');
    	}
    	catch(Exception $ex){
    		return redirect('/');
    	}
    }
    
    public function translate($message)
    {
    	return Lang::get($message);
    }

}