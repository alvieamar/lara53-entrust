<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'item 1',
                'description' => 'This is item number 1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'item 2',
                'description' => 'This is item number 2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];

        foreach ($items as $key => $value) {
            DB::table('items')->insert([
                $key => $value,
            ]);
        }
    }
}
