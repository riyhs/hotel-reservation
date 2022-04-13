<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'price' => $this->faker->numberBetween($min = 100, $max = 990) * 1000,
            'amount' => $this->faker->numberBetween($min = 10, $max = 2000),
            'used' => 8,
            'spec_id' => $this->faker->numberBetween($min = 1, $max = 4),
        ];
    }
}
