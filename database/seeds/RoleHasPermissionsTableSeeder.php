<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleHasPermissionsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$permissionsId 	= [1, 2, 3, 4];

		foreach ($permissionsId as $permissionId) {
			DB::table('role_has_permissions')->insert([
				'permission_id' => $permissionId,
				'role_id'				=> 1
			]);
		}
	}
}
