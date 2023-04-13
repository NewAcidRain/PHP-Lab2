<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

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
        $title = fake()->words(2, true);
        $symbolic_code = Str::slug($title);
        return [
            'title' => $title,
            'symbolic_code' => $symbolic_code,
            'description' => fake()->text,
            'creation_date' => fake()->dateTime,
            'price' => fake()->numberBetween(200, 4000),
            'img' => '',
            'quantity' => fake()->numberBetween(5, 100),
            'category_id' => Category::all()->random()->id
        ];
    }
}
