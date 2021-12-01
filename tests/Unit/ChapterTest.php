<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Chapter;

class ChapterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $chapters = Chapter::factory()->make();
        $this->assertEquals('/chapters/'.$chapters->NumberOfChapters, $chapters->path());
        dd( $chapters->toArray() );
    }
}
