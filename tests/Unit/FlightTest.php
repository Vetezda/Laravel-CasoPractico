<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Flight;

class FlightTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $flight = Flight::factory()->make();
        $this->assertEquals('/flight/'.$flight->Number, $flight->path());
        dd( $flight->toArray() );
    }
}
