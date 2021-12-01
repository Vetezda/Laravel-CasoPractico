<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Ingredient;

class IngredientTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $ingredient = Ingredient::factory()->make();
        $this->assertEquals('/ingredient/'.$ingredient->quantity, $ingredient->path());
        dd( $ingredient->toArray() );
    }
}
