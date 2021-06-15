<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
	public function run()
	{
		$userCount = 4;
		$model = model('UserModel');

		for ($i=0; $i < $userCount; $i++) { 
			$model->insert([
				'email'			=> static::faker()->email,
				'username'		=> static::faker()->word,
				'password_hash'	=> '$2y$10$5aGFfnHvzIyyJQLkE8GvROxRVv2i4r/S9Fb6DMJlVGbZe4f6jmCCm', // password1
				'active'		=> 1,
			]);
		}

	}
}
