<?php namespace Fencus\AddressBook\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Fencus\AddressBook\Models\Person as PersonModel;
use Fencus\GoogleMapsWidgets\Models\Settings as MapsSettings;
use Flash;
use Lang;
use Backend;

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

    public $api_key;
    
    public function __construct()
    {
    	$this->api_key = MapsSettings::get('api_key');
    	
        parent::__construct();

        BackendMenu::setContext('Fencus.AddressBook', 'addressbook', 'people');
    }
    
    public function index()
    {
    	if(!$this->api_key)
    		return Redirect(Backend::url('system/settings/update/fencus/googlemapswidgets/settings'));
    
    		$this->asExtension('ListController')->index();
    }
    
    public function create()
    {
    	if(!$this->api_key)
    		return Redirect(Backend::url('system/settings/update/fencus/googlemapswidgets/settings'));
    
    		return $this->asExtension('FormController')->create();
    }
    
    public function update($recordId = null)
    {
    	if(!$this->api_key)
    		return Redirect(Backend::url('system/settings/update/fencus/googlemapswidgets/settings'));
    
    		return $this->asExtension('FormController')->update($recordId);
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