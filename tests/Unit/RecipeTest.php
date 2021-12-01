<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Recipe;

class RecipeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $recipe = Recipe::factory()->make();
        $this->assertEquals('/recipe/'.$recipe->Title, $recipe->path());
        dd( $recipe->toArray() );
    }
}
