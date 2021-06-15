<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfilesSeeder extends Seeder
{
	public function run()
	{
		$profilesCount = 4;
		$model = model('Profile');

		for ($i=0; $i < $profilesCount; $i++) { 
			$model->insert([
				'name'				=> static::faker()->name,
				'commission_rate'	=> static::faker()->numberBetween(10, 40),
				'tax_rate'			=> static::faker()->numberBetween(2, 20),
			]);
		}
	}
}
