<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Seats;

class SeatsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $seats = Seats::factory()->make();
        $this->assertEquals('/seats/'.$seats->Letter, $seats->path());
        dd( $seats->toArray() );
    }
}
