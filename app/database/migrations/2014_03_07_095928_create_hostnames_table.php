<?php
use Illuminate\Database\Migrations\Migration;

class CreateHostnamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{		

		Schema::create('hostnames', function($table) {         
			$table->increments('id');
			$table->string('hostname');
			$table->boolean('block');
			$table->timestamps();
        });		
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hostnames');
	}

}

