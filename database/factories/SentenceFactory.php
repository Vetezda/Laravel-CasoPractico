<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SentenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NumberOfSentences'=> $this->faker->randomDigit(),
        ];
    }
}
