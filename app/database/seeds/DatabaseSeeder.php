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
		$this->call('UserImageTableSeeder');
	}

	private function defineFactories()
	{
		Facade::define('User', array(
			'email' => 'email',
			'first_name' => 'firstName',
			'last_name' => 'lastName',
			'profile_image' => 'imageUrl|400;400'
		));

		Facade::define('UserImage', array (
			'user_id' => 'numberBetween|1;10',
			'name' => 'sentence',
			'description' => 'text',
			'url' => 'imageUrl|400;400'
		));
	}
}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		for($i=0; $i<10; $i++) Facade::create('User');
	}
}

class UserImageTableSeeder extends Seeder {

	public function run()
	{
		DB::table('user_images')->delete();

		for($i=0; $i<500; $i++) Facade::create('UserImage');
	}
}
