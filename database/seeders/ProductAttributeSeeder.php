<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 1,
            'attribute_value' => 1300,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 3,
            'attribute_value' => 11,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2020,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 5,
            'attribute_value' => '194 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'White',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 1,
            'attribute_value' => 1600,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 3,
            'attribute_value' => 11,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2020,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 5,
            'attribute_value' => '194 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'White',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-white-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 1,
            'attribute_value' => 1600,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 3,
            'attribute_value' => 11,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2020,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 5,
            'attribute_value' => '194 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 1,
            'attribute_value' => 1600,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 3,
            'attribute_value' => 11,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2020,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 5,
            'attribute_value' => '194 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 1,
            'sku_simple' => 'iphone11-black-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 1,
            'attribute_value' => 1800,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 3,
            'attribute_value' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2021,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 5,
            'attribute_value' => '164 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'Blue',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 1,
            'attribute_value' => 2000,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 3,
            'attribute_value' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2021,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 5,
            'attribute_value' => '164 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'Blue',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-blue-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 1,
            'attribute_value' => 1800,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 3,
            'attribute_value' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2021,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 5,
            'attribute_value' => '164 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 1,
            'attribute_value' => 2000,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 3,
            'attribute_value' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2021,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 5,
            'attribute_value' => '164 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 2,
            'sku_simple' => 'iphone12-black-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 1,
            'attribute_value' => 2350,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 3,
            'attribute_value' => 13,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 4,
            'attribute_value' => 2021,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 5,
            'attribute_value' => '174 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 9,
            'attribute_value' => '326 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 13,
            'attribute_value' => 'Red',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 3,
            'sku_simple' => 'iphone13-red-326gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 1,
            'attribute_value' => 2350,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 3,
            'attribute_value' => 14,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 5,
            'attribute_value' => '172 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'Yellow',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 4,
            'sku_simple' => 'iphone14-yellow-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 1,
            'attribute_value' => 2700,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 3,
            'attribute_value' => 14,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 5,
            'attribute_value' => '172 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 9,
            'attribute_value' => '256 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 13,
            'attribute_value' => 'Blue',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 5,
            'sku_simple' => 'iphone14pro-blue-256gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 1,
            'attribute_value' => 4500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 3,
            'attribute_value' => 14,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 5,
            'attribute_value' => '240 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 7,
            'attribute_value' => '6.7 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 8,
            'attribute_value' => 'IOS 16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 9,
            'attribute_value' => '512 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 13,
            'attribute_value' => 'Gold',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 6,
            'sku_simple' => 'iphone14promax-gold-512gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 1,
            'attribute_value' => 1300,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Samsung',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 3,
            'attribute_value' => 'S21',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 5,
            'attribute_value' => '177 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.4 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 12,
            'attribute_value' => '8 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'White',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-white-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 1,
            'attribute_value' => 1300,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Samsung',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 3,
            'attribute_value' => 'S21',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 5,
            'attribute_value' => '177 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.4 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 12,
            'attribute_value' => '8 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'Lavander',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 7,
            'sku_simple' => 'samsunggalaxys21-lavander-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 1,
            'attribute_value' => 1900,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 2,
            'attribute_value' => 'Samsung',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 3,
            'attribute_value' => 'S22',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 5,
            'attribute_value' => '167 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 9,
            'attribute_value' => '256 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 12,
            'attribute_value' => '10 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 13,
            'attribute_value' => 'Green',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 8,
            'sku_simple' => 'samsunggalaxys22-green-256gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 1,
            'attribute_value' => 430,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Samsung',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 3,
            'attribute_value' => 'A13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 5,
            'attribute_value' => '195 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.6 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 11,
            'attribute_value' => '8 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 12,
            'attribute_value' => '8 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 9,
            'sku_simple' => 'samsunggalaxya13-black-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 1,
            'attribute_value' => 260,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 2,
            'attribute_value' => 'Samsung',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 3,
            'attribute_value' => 'A04',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 5,
            'attribute_value' => '192 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 7,
            'attribute_value' => '6.5 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 9,
            'attribute_value' => '32 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 11,
            'attribute_value' => '5 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 12,
            'attribute_value' => '5 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 13,
            'attribute_value' => 'Green',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 10,
            'sku_simple' => 'samsunggalaxya04-green-32gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 1,
            'attribute_value' => 500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Samsung',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 3,
            'attribute_value' => 'A23',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 5,
            'attribute_value' => '195 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.6 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 9,
            'attribute_value' => '32 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 11,
            'attribute_value' => '5 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 12,
            'attribute_value' => '2 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'Peach',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 11,
            'sku_simple' => 'samsunggalaxya23-peach-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 1,
            'attribute_value' => 1300,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Google',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 3,
            'attribute_value' => '7A',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2023,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 5,
            'attribute_value' => '195 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.1 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 11,
            'attribute_value' => '64 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'Blue',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 12,
            'sku_simple' => 'googlepixel7a-blue-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 1,
            'attribute_value' => 1500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 2,
            'attribute_value' => 'Google',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 3,
            'attribute_value' => '7PRO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 4,
            'attribute_value' => 2023,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 5,
            'attribute_value' => '212 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 7,
            'attribute_value' => '6.7 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 9,
            'attribute_value' => '128 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 11,
            'attribute_value' => '50 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 12,
            'attribute_value' => '48 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 13,
            'attribute_value' => 'White',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 13,
            'sku_simple' => 'googlepixel7pro-white-128gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 1,
            'attribute_value' => 600,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Google',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 3,
            'attribute_value' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2019,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 5,
            'attribute_value' => '162 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 7,
            'attribute_value' => '5.7 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 11,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 12,
            'attribute_value' => '16 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 14,
            'sku_simple' => 'googlepixel4-black-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 1,
            'attribute_value' => 1300,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 2,
            'attribute_value' => 'Google',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 3,
            'attribute_value' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 4,
            'attribute_value' => 2019,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 5,
            'attribute_value' => '207 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 7,
            'attribute_value' => '6.4 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 9,
            'attribute_value' => '256 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 11,
            'attribute_value' => '50 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 12,
            'attribute_value' => '12 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 13,
            'attribute_value' => 'black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 15,
            'sku_simple' => 'googlepixel6-black-256gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 1,
            'attribute_value' => 270,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Xiaomi',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 3,
            'attribute_value' => '10A',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 5,
            'attribute_value' => '194 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.5 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 11',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 11,
            'attribute_value' => '13 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 12,
            'attribute_value' => '13 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'Silver',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 16,
            'sku_simple' => 'xiaomi10a-silver-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 1,
            'attribute_value' => 270,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Xiaomi',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 3,
            'attribute_value' => 'C40',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 5,
            'attribute_value' => '204 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.7 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 11',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 11,
            'attribute_value' => '13 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 12,
            'attribute_value' => '2 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 17,
            'sku_simple' => 'xiaomic40-black-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 1,
            'attribute_value' => 300,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 2,
            'attribute_value' => 'Xiaomi',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 3,
            'attribute_value' => '12C',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 4,
            'attribute_value' => 2023,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 5,
            'attribute_value' => '192 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 7,
            'attribute_value' => '6.7 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 11',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 9,
            'attribute_value' => '64 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 11,
            'attribute_value' => '50 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 12,
            'attribute_value' => '2 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 13,
            'attribute_value' => 'Green',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 18,
            'sku_simple' => 'xiaomi12c-green-64gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 1,
            'attribute_value' => 2000,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 2,
            'attribute_value' => 'Xiaomi',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 3,
            'attribute_value' => '13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 4,
            'attribute_value' => 2022,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 5,
            'attribute_value' => '185 g',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 6,
            'attribute_value' => 'Nano',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 7,
            'attribute_value' => '6.3 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 8,
            'attribute_value' => 'Android 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 9,
            'attribute_value' => '256 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 10,
            'attribute_value' => 'NO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 11,
            'attribute_value' => '50 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 12,
            'attribute_value' => '10 MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 19,
            'sku_simple' => 'xiaomi13-black-256gb',
            'attribute_id' => 16,
            'attribute_value' => 'Phones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 1,
            'attribute_value' => 2800,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 2,
            'attribute_value' => 'Lenovo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 3,
            'attribute_value' => 'E14',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 5,
            'attribute_value' => '1.64 kg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 7,
            'attribute_value' => '14 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 8,
            'attribute_value' => 'Windows 10',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 9,
            'attribute_value' => '16 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 15,
            'attribute_value' => 'Intel Core i7',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 17,
            'attribute_value' => 'IPS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 20,
            'sku_simple' => 'lenovoe14',
            'attribute_id' => 18,
            'attribute_value' => 'M.2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 1,
            'attribute_value' => 2700,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 2,
            'attribute_value' => 'Lenovo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 3,
            'attribute_value' => 'E15',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 5,
            'attribute_value' => '1.7 kg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 7,
            'attribute_value' => '16 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 8,
            'attribute_value' => 'Windows 11 PRO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 9,
            'attribute_value' => '16 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 15,
            'attribute_value' => 'Intel Core i5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 17,
            'attribute_value' => 'IPS 250nits',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 21,
            'sku_simple' => 'lenovoe15',
            'attribute_id' => 18,
            'attribute_value' => 'M.2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 1,
            'attribute_value' => 2300,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 2,
            'attribute_value' => 'Lenovo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 3,
            'attribute_value' => 'L13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 5,
            'attribute_value' => '1.44 kg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 7,
            'attribute_value' => '13 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 8,
            'attribute_value' => 'Windows 10 PRO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 9,
            'attribute_value' => '8 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 13,
            'attribute_value' => 'Silver',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 15,
            'attribute_value' => 'Intel Core i5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 17,
            'attribute_value' => 'IPS 300nits',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 22,
            'sku_simple' => 'lenovol13',
            'attribute_id' => 18,
            'attribute_value' => 'M.2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 1,
            'attribute_value' => 950,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 2,
            'attribute_value' => 'Lenovo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 3,
            'attribute_value' => 'V15',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 5,
            'attribute_value' => '1.5 kg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 7,
            'attribute_value' => '16 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 8,
            'attribute_value' => 'Windows 10',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 9,
            'attribute_value' => '4 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 15,
            'attribute_value' => 'Intel Core i3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 17,
            'attribute_value' => 'TN 250nits Anti-glare',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 23,
            'sku_simple' => 'lenovov15',
            'attribute_id' => 18,
            'attribute_value' => 'M.2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 1,
            'attribute_value' => 2600,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 5,
            'attribute_value' => '1.3 kg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 7,
            'attribute_value' => '13 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 8,
            'attribute_value' => 'macOS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 9,
            'attribute_value' => '8 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 13,
            'attribute_value' => 'Gold',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 24,
            'sku_simple' => 'macbookair',
            'attribute_id' => 18,
            'attribute_value' => 'PCIe',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 1,
            'attribute_value' => 7600,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 5,
            'attribute_value' => '2.1 kg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 7,
            'attribute_value' => '16 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 8,
            'attribute_value' => 'macOS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 9,
            'attribute_value' => '16 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 13,
            'attribute_value' => 'Silver',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 25,
            'sku_simple' => 'macbookpro',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 26,
            'sku_simple' => 'Imac',
            'attribute_id' => 1,
            'attribute_value' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 26,
            'sku_simple' => 'Imac',
            'attribute_id' => 2,
            'attribute_value' => 'Apple',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 26,
            'sku_simple' => 'Imac',
            'attribute_id' => 7,
            'attribute_value' => '24 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 26,
            'sku_simple' => 'Imac',
            'attribute_id' => 8,
            'attribute_value' => 'macOS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 26,
            'sku_simple' => 'Imac',
            'attribute_id' => 9,
            'attribute_value' => '8 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 26,
            'sku_simple' => 'Imac',
            'attribute_id' => 13,
            'attribute_value' => 'Green',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 26,
            'sku_simple' => 'Imac',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 26,
            'sku_simple' => 'Imac',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 1,
            'attribute_value' => 2600,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 2,
            'attribute_value' => 'Asus',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 5,
            'attribute_value' => '1.4 kg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 7,
            'attribute_value' => '14 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 8,
            'attribute_value' => 'Windows 10',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 9,
            'attribute_value' => '8 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 13,
            'attribute_value' => 'Grey',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 27,
            'sku_simple' => 'Asuszenbook',
            'attribute_id' => 18,
            'attribute_value' => 'M.2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 1,
            'attribute_value' => 4500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 2,
            'attribute_value' => 'Microsoft',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 7,
            'attribute_value' => '13.5 inches',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 8,
            'attribute_value' => 'Windows 11 Pro',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 9,
            'attribute_value' => '8 GB',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 13,
            'attribute_value' => 'Black',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 14,
            'attribute_value' => 'SSD',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 15,
            'attribute_value' => 'Intel Core i5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_attribute_values')->insert([
            'product_id' => 28,
            'sku_simple' => 'Microsoftsurface',
            'attribute_id' => 16,
            'attribute_value' => 'Laptops',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
