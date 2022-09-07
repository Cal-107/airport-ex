<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'flight_code' => $this->faker->regexify('[A-Z]{2}[0-9]{8}'),
            'date' => $this->faker->date(),
            'take_off' => $this->faker->time(),
            'landing' => $this->faker->time(),
        ];
    }
}
