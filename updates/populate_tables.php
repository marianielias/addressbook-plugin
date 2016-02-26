<?php namespace Fencus\AddressBook\Updates;

use Fencus\AddressBook\Models\Person;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{

	public function run()
	{
		Person::create([
				'name' => 'John Doe',
				'address' => 'Miami, Florida, United Estates',
				'telephone' => '0000-0000-0000',
				'birthday' => '1985/12/31',
				'email' => 'johndoe@fencus.com.ar',
				'short_description' => 'Just a guy from the US.',
		]);
		
		Person::create([
				'name' => 'Sherlock Holmes',
				'address' => 'London, United Kingdom',
				'telephone' => '0000-0000-0001',
				'birthday' => '1854/06/01',
				'email' => 'sholmes@fencus.com.ar',
				'short_description' => 'A private detective.',
		]);
		
		Person::create([
				'name' => 'Juan Perez',
				'address' => 'La Plata, Buenos Aires, Argentina',
				'telephone' => '0000-0000-0002',
				'birthday' => '1987/07/22',
				'email' => 'info@fencus.com.ar',
				'short_description' => 'Just a guy from Argentina.',
		]);
		
		Person::create([
				'name' => 'Natalia Natalia',
				'address' => 'Bariloche, Buenos Aires, Argentina',
				'telephone' => '0000-0000-0003',
				'birthday' => '1975/02/05',
				'email' => 'nn@fencus.com.ar',
				'short_description' => 'Another guy from Argentina.',
		]);
		
		Person::create([
				'name' => 'Albert Einstein',
				'address' => 'Ulm, Baden-Württemberg, Germany',
				'telephone' => '0000-0000-0004',
				'birthday' => '1879/03/14',
				'email' => 'emc2@fencus.com.ar',
				'short_description' => 'A theoretical physicist.',
		]);
		
		Person::create([
				'name' => 'Max Planck',
				'address' => 'Kiel, Germany',
				'telephone' => '0000-0000-0005',
				'birthday' => '1858/04/23',
				'email' => 'max@fencus.com.ar',
				'short_description' => 'A theoretical physicist.',
		]);
		
		
	}

}