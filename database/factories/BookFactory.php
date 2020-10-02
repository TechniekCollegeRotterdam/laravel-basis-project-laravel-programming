<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(150),
            'description' => $this->faker->paragraph(15),
            'isbn' => $this->faker->numerify('#########################'),
            'created_at' => $this->faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
            'updated_at' => $this->faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
            'category_id' => Category::all()->random()->id
        ];
    }
}
