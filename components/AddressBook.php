<?php namespace Fencus\AddressBook\Components;

use Cms\Classes\ComponentBase;
use Fencus\AddressBook\Models\Person as PersonModel;
use Lang;
use Request;
use Cms\Classes\Page;

class AddressBook extends ComponentBase
{
	
	public $people;

    public function componentDetails()
    {
        return [
            'name'        => 'fencus.addressbook::lang.addressbook_component.name',
            'description' => 'fencus.addressbook::lang.addressbook_component.description'
        ];
    }

public function defineProperties()
    {
        return [
        		'personPage' => [
        				'title'       => 'fencus.addressbook::lang.addressbook_component.person_page',
        				'type'        => 'dropdown',
        				'default'     => 'person',
        		],
        		'resultsPerPage' => [
        				'title'       => 'fencus.addressbook::lang.addressbook_component.results_per_page',
        				'default'     => '20',
        				'type'        => 'string',
        		],
        ];
    }
    
    public function getPersonPageOptions()
    {
    	return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
    
    public function onRun()
    {
    	$this->people = PersonModel::peopleList([
    			'page' => input('page'),
    			'perPage' => $this->property('resultsPerPage'),
    	]);
    	foreach($this->people as $person)
    	{
    		$person->setUrl($this->property('personPage'), $this->controller);
    	}
    	
    	$queryArr = [];
    	$queryArr['page'] = '';
    	$paginationUrl = Request::url() . '?' . http_build_query($queryArr);
    	$this->page['paginationUrl'] = $paginationUrl;
    }
    
    public function translate($message)
    {
    	return Lang::get($message);
    }

}