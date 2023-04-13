<?php

namespace Database\Factories;

//use Dotenv\Util\Str;
use App\Models\Category;
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
        $parent = Category::all()->random('id');
        $title = fake()->words(2,true);
        $symbolic_code = Str::slug($title);

        return [
            'title' =>$title,
            'symbolic_code' => $symbolic_code,
            'active' => true,
            'creation_date' => fake()->dateTime,
            'parent' => $parent
        ];
    }
}
