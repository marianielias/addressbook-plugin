<?php namespace Fencus\AddressBook\Models;

use Model;

/**
 * Person Model
 */
class Person extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fencus_addressbook_people';

    /*
     * Validation
     */
    use \October\Rain\Database\Traits\Validation;
    public $rules = [
    		'name' => ['required', 'max:50'],
    		'birthday' => ['date'],
    		'address' => ['max:255'],
    		'telephone' => ['max:50'],
    		'email' => ['email','max:255'],
    		'short_description' => ['max:255'],
    ];
    
    /**
     * @var array Generate slugs for these attributes.
     */
    use \October\Rain\Database\Traits\Sluggable;
    protected $slugs = [
    		'slug' => ['name']
    ];
    
    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    
    public function setUrl($pageName, $controller)
    {
    	$params = [
    			'id' => $this->id,
    			'slug' => $this->slug,
    	];
    
    	return $this->url = $controller->pageUrl($pageName, $params);
    }
    
    public function scopePeopleList($query, $options)
    {
    	extract(array_merge([
    			'page'       => 1,
    			'perPage'    => 10,
    	], $options));
    	
    	$query->orderBy('name', 'asc');
    	
    	return $query->paginate($perPage, $page);
    }

}