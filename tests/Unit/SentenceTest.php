<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Sentence;

class SentenceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $sentence = Sentence::factory()->make();
        $this->assertEquals('/sentence/'.$sentence->NumberOfSentences, $sentence->path());
        dd( $sentence->toArray() );
    }
}
