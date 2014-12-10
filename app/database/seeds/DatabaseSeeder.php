<?php

use League\FactoryMuffin\Facade;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		$this->defineFactories();
		$this->call('UserTableSeeder');
	}

	private function defineFactories()
	{
		Facade::define('User', array(
			'email' => 'email',
			'first_name' => 'firstName',
			'last_name' => 'lastName',
			'profile_image' => 'imageUrl|400;400'
		));
	}
}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		// User::create(array('email' => 'foo@bar.com'));
		for($i=0; $i<10; $i++) Facade::create('User');
	}

}
