<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Apple'
        ]);

        DB::table('brands')->insert([
            'name' => 'Samsung'
        ]);

        DB::table('brands')->insert([
            'name' => 'Google'
        ]);

        DB::table('brands')->insert([
            'name' => 'Xiaomi'
        ]);

        DB::table('brands')->insert([
            'name' => 'Lenovo'
        ]);

        DB::table('brands')->insert([
            'name' => 'Asus'
        ]);

        DB::table('brands')->insert([
            'name' => 'Microsoft'
        ]);
    }
}
