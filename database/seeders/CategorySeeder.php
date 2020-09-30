<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->times(10)
            ->create()
            ->each(function ($category) {
                $category->book()->saveMany(Book::factory()->times(10)->create(['category_id' => $category->id]));
            });
    }
}
