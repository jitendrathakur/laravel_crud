<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('HostnamesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('NetworksTableSeeder');
		$this->call('ServicesTableSeeder');
	}

}