<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Airport;

class AirportTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $airport = Airport::factory()->make();
        $this->assertEquals('/airport/'.$airport->City, $airport->path());
        dd( $airport->toArray() );
    }
}
