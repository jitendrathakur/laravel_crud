<?php
use Illuminate\Database\Migrations\Migration;

class CreateNetworksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{		

		Schema::create('networks', function($table) {    
			$table->increments('id');     
			$table->integer('nid');
			$table->string('n_name', 255);
			$table->string('n_ip', 255);
			$table->boolean('n_status');
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
		Schema::drop('networks');
	}

}
