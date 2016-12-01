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
        $admin->name = 'Admin';
        $admin->display_name = 'Admin'; // optional
        $admin->description = 'Admin can do all'; // optional
        $admin->save();

        $viewer = new Role();
        $viewer->name         = 'viewer';
        $viewer->display_name = 'Viewer'; // optional
        $viewer->description  = 'A viewer can view list of items'; // optional
        $viewer->save();

        $editor = new Role();
        $editor->name         = 'editor';
        $editor->display_name = 'Editor'; // optional
        $editor->description  = 'An editor can create, display, edit items.'; // optional
        $editor->save();

        $eraser = new Role();
        $eraser->name         = 'eraser';
        $eraser->display_name = 'Eraser'; // optional
        $eraser->description  = 'An eraser can create display, edit and delete items'; // optional
        $eraser->save();

        $roleManager = new Role();
        $roleManager->name         = 'role manager';
        $roleManager->display_name = 'Role Manager'; // optional
        $roleManager->description  = 'A role manager can create display, edit and delete roles'; // optional
        $roleManager->save();

        $roleCreator = new Role();
        $roleCreator->name         = 'role creator';
        $roleCreator->display_name = 'Role Creator'; // optional
        $roleCreator->description  = 'A role manager can create display, edit roles'; // optional
        $roleCreator->save();

        $permissions = Permission::pluck('id');

        // and assign all permission like as below
        foreach ($permissions as $permission) {
            $admin->attachPermission($permission);
        }

        $viewer->attachPermission($permissions[3]);
        $editor->attachPermissions([$permissions[3], $permissions[2], $permissions[0]]);
        $eraser->attachPermissions([$permissions[1], $permissions[3], $permissions[2], $permissions[0]]);
        $roleManager->attachPermissions([$permissions[4], $permissions[5], $permissions[6], $permissions[7], $permissions[3]]);
        $roleCreator->attachPermissions([$permissions[4], $permissions[6], $permissions[7]]);
    }
}
