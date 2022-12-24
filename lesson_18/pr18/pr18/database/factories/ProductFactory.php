<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition()
    {
        $category = DB::table('categories')->inRandomOrder()->first();
        $brand = DB::table('brands')->inRandomOrder()->first();
        $name = fake()->streetName();

        return [
            'category_id' => $category->id,
            'brand_id' => $brand->id,
            'name' => $name,
            'slug' => str($name. '-' .rand(100, 999))->slug(),
            'barcode' =>fake()->unique()->isbn13(),
            'price' => rand(100, 9999),
            'stock' => fake()->randomFloat($nbMaxDecimals = 1, $min = 100, $max = 1000),
            'viewed' => rand(0, 50),
            'description' => fake()->text($maxNbChars = rand(100, 150)),
        ];
    }
}
