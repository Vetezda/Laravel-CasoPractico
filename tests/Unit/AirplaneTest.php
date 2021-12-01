<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Airplane;

class AirplaneTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $airplane = Airplane::factory()->make();
        $this->assertEquals('/airplane/'.$airplane->Company, $airplane->path());
        dd( $airplane->toArray() );
    }
}
