<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->words(2,true),
            'symbolic_code'=>fake()->uuid,
            'description'=>fake()->text,
            'creation_date'=>fake()->dateTime,
            'price'=>fake()->numberBetween(200,4000),
            'img'=>'',
            'quantity'=>fake()->numberBetween(5,100),
            'category_id'=>Category::all()->random()->id
        ];
    }
}
