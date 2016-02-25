<?php namespace Fencus\AddressBook;

use Backend;
use System\Classes\PluginBase;

/**
 * AddressBook Plugin Information File
 */
class Plugin extends PluginBase
{
	
	public $require = ['Fencus.GoogleMapsWidgets'];
	
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'fencus.addressbook::lang.plugin.name',
            'description' => 'fencus.addressbook::lang.plugin.description',
            'author'      => 'Elias M. Mariani, Ariel M. Carrettoni',
            'icon'        => 'icon-book',
        	'homepage'    => 'https://www.fencus.com.ar'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Fencus\AddressBook\Components\Person' => 'person',
        	'Fencus\AddressBook\Components\AddressBook' => 'addressBook',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'fencus.addressbook.access' => [
                'tab' => 'fencus.addressbook::lang.plugin.name',
                'label' => 'fencus.addressbook::lang.plugin.access'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'addressbook' => [
                'label'       => 'fencus.addressbook::lang.plugin.name',
                'url'         => Backend::url('fencus/addressbook/People'),
                'icon'        => 'icon-book',
                'permissions' => ['fencus.addressbook.access'],
                'order'       => 500,
            ],
        ];
    }

}
