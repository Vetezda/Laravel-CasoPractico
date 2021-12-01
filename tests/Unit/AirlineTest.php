<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Models\Airline;

class AirlineTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $airline = Airline::factory()->make(['name' => 'Delta']);
        $this->assertEquals('/airline/'.$airline->name, $airline->path());
        dd( $airline->toArray() );
    }
}
