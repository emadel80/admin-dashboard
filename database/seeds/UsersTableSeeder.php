<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name'			=> ucfirst(config('app.db_username')),
			'email'			=> config('app.db_email'),
			'password'	=> Hash::make(config('app.db_password'))	
		]);
	}
}
