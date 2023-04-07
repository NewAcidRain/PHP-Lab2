<?php

namespace Database\Factories;

//use Dotenv\Util\Str;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'symbolic_code' => fake()-> uuid,
            'active' => true,
            'creation_date' => fake()->dateTime,
            'parent' => fake()->title
        ];
    }
}
