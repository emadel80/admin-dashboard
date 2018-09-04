<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasPermissionsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$permissionsId = [1, 2, 3, 4];

		foreach ($permissionsId as $permissionId) {
			DB::table('model_has_permissions')->insert([
				'permission_id'	=> $permissionId,
				'model_type'		=> 'App\Models\User',
				'model_id'			=> 1
			]);
		}
	}
}
