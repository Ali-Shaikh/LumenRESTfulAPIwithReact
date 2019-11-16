<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'id'             => 1,
                'title'          => 'Naturally Tan',
                'genre'          => 'Biography',
                'author_name'    => 'Tan France',
                'date_published' => '2019-10-22'
            ],
            [
                'id'             => 2,
                'title'          => 'Harry Potter And The Chamber Of Secrets',
                'genre'          => 'Fantasy novel',
                'author_name'    => 'J.K. Rowling',
                'date_published' => '2014-12-12'
            ],
            [
                'id'             => 3,
                'title'          => 'War and Peace',
                'genre'          => 'Historical novel',
                'author_name'    => 'Leo Tolstoy',
                'date_published' => '1869-12-01'
            ],
            [
                'id'             => 4,
                'title'          => 'Building RESTful Apis with Laravel',
                'genre'          => 'Technology',
                'author_name'    => 'Kieran Bone',
                'date_published' => '2012-10-23'
            ],
            [
                'id'             => 5,
                'title'          => 'Learn React',
                'genre'          => 'Technology',
                'author_name'    => 'James Smith',
                'date_published' => '2015-10-30'
            ],
        ];

        foreach ($books as $book) {
            Book::updateOrCreate(['id' => $book['id']], $book);
        }
    }
}
