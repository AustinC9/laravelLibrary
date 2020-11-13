<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Book;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Book::factory()
            ->times(50)
            ->create();
    }
}
