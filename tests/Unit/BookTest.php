<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Book;

class BookTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $book = Book::factory()->make(['name' => 'La Odisea']);
        $this->assertEquals('/book/'.$book->name, $book->path());
        //dd( $book->toArray() );
    }
}
