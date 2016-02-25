<?php namespace Fencus\AddressBook\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePeopleTable extends Migration
{

    public function up()
    {
        Schema::create('fencus_addressbook_people', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->text('short_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fencus_addressbook_people');
    }

}
