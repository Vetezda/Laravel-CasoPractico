<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Paragraph;

class ParagraphTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $paragraph = Paragraph::factory()->make();
        $this->assertEquals('/paragraph/'.$paragraph->NumberOfParagraphs, $paragraph->path());
        dd( $paragraph->toArray() );
    }
}
