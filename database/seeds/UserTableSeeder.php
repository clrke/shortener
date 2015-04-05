<?php

use Illuminate\Database\Seeder;
use Shortener\User;

class UserTableSeeder extends Seeder {
	public function run()
	{
		User::truncate();

		User::create([
			'name' => 'Administrator',
			'email' => 'admin@admin.com',
			'password' => Hash::make('admin')
		]);
	}
}
