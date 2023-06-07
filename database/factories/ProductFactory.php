<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected array $name = [
        '2' => [
            'iphone 11',
            'iphone 12',
            'iphone 13',
            'iphone 14',
            'iphone 15',
            'iphone 16',
            'Samsung A11',
            'Samsung A12',
            'Samsung A13',
            'Samsung A14',
            'Samsung A15',
            'Google Pixel 4',
            'Google Pixel 5',
            'Google Pixel 6',
            'Google Pixel 7',
            'Xiaomi 10',
            'Xiaomi 11',
            'Xiaomi 12',
            'Xiaomi 13'
        ],

        '3' => [
            'Lenovo e14',
            'Lenovo e15',
            'Lenovo e16',
            'Lenovo e17',
            'Apple MacBook Air',
            'Apple MacBook Pro',
            'Apple iMac',
            'Asus Zenbook 10',
            'Asus Zenbook 11',
            'Asus Zenbook 12',
            'Asus Zenbook 13',
            'Microsoft Surface Laptop 4',
            'Microsoft Surface Laptop 5',
            'Microsoft Surface Laptop 6',
            'Microsoft Surface Laptop 7'
        ]
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categoryId = Arr::random($this->name);
        $name = Arr::random($this->name[$categoryId]);

        return [
            'name' => $name,
            'sku' => random_int(10000000000, 19999999999),
            'configurable' => true,
            'category_id' => $categoryId,
            'brand_id' => substr($name, 0, strpos($name, ' ',)),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
