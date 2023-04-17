<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            'name' => 'price',
            'code' => 'price',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'sku',
            'code' => 'sku',
            'is_filterable' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'series',
            'code' => 'series',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'release date',
            'code' => 'release_date',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'weight',
            'code' => 'weight',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'sim type',
            'code' => 'sim_type',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'screen size',
            'code' => 'screen_size',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'operating system',
            'code' => 'operating_system',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'internal storage',
            'code' => 'internal_storage',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'ram',
            'code' => 'ram',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'additional storage',
            'code' => 'additional_storage',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'main camera',
            'code' => 'main_camera',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'front camera',
            'code' => 'front_camera',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'resolution',
            'code' => 'resolution',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'color',
            'code' => 'color',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'video card model',
            'code' => 'video_card_model',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'hard disk type',
            'code' => 'hard_disk_type',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'hard disk size',
            'code' => 'hard_disk_size',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'processor type',
            'code' => 'processor_type',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('attributes')->insert([
            'name' => 'core frequency',
            'code' => 'core_frequency',
            'is_filterable' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
