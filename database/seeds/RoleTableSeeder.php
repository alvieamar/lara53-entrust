<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create admin role this way
        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->description = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $admin = new Role();
        $admin->name         = 'manager';
        $admin->display_name = 'Manager'; // optional
        $admin->description  = 'User is allowed to manage users'; // optional
        $admin->save();

        $permissions = Permission::pluck('id');

        // and assign all permission like as below
        foreach ($permissions as $permission) {
            $admin->attachPermission($permission);
        }
    }
}
