<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
//use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'See only Listing Of Role',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'item-list',
                'display_name' => 'Display Item Listing',
                'description' => 'See only Listing Of Item',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'item-create',
                'display_name' => 'Create Item',
                'description' => 'Create New Item',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'item-edit',
                'display_name' => 'Edit Item',
                'description' => 'Edit Item',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'item-delete',
                'display_name' => 'Delete Item',
                'description' => 'Delete Item',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];

        foreach ($permission as $key => $value) {
//            App\Permission::create($value);

            DB::table('permissions')->insert([
                $key => $value,
            ]);
        }
    }
}
