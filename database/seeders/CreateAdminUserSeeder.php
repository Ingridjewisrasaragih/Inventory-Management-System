<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class CreateAdminUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $user = User::create([
      'name' => 'Naymur Rahman',
      'email' => 'naymur@example.com',
      'password' => bcrypt('abcd1234')
    ]);

    Role::create(['name' => 'User']);

    $role = Role::create(['name' => 'Super Admin']);

    $permissions = Permission::pluck('id', 'id')->all();

    $role->syncPermissions($permissions);

    $user->assignRole([$role->id]);
  }
}
