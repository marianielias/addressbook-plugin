<?php namespace Fencus\AddressBook\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Fencus\AddressBook\Models\Person as PersonModel;
use Flash;
use Lang;

/**
 * People Back-end Controller
 */
class People extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Fencus.AddressBook', 'addressbook', 'people');
    }
    
    public function index_onDelete()
    {
    	if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
    
    		foreach ($checkedIds as $checkedId) {
    			if ((!$object = PersonModel::find($checkedId)))
    				continue;
    				$object->delete();
    		}
    
    		Flash::success(Lang::get('fencus.addressbook::lang.people.success_delete'));
    	}
    
    	return $this->listRefresh();
    }
}