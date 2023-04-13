<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $categories = Category::factory()->count(100)->create();
        foreach ($categories as $category) {
            if ($category->id != 1) { // пропускаем корневую категорию
                $parent = $categories->random();
                $category->parent()->associate($parent);
                $category->save();
            }
        }
    }
}
