<?php

namespace Database\Factories;

use App\Models\Book;
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
            'title' => $this->faker->name,
            'excerpt' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'isbn' => $this->faker->isbn13,
            'pages' => $this->faker->randomDigit
        ];
    }
}
