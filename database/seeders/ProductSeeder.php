<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'iphone 11',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'iphone 12',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'iphone 13',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'iphone 14',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'iphone 14 pro',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'iphone 14 pro max',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung A11',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung A12',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung A13',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung A14',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung A15',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 7a',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 7 pro',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 4',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 6',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Xiaomi 10a',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Xiaomi c40',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Xiaomi 12c',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Xiaomi 13',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 2,
            'brand_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Lenovo Thinkpad e14',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Lenovo Thinkpad e15',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Lenovo Thinkpad L13',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Lenovo v15',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Apple MacBook Air',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Apple MacBook Pro',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iMac',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Asus Zenbook 14',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Microsoft Surface Laptop 4',
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => 3,
            'brand_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
