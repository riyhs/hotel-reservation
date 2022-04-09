<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->firstNameMale(),
            'email' => 'riyaldi.guest@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('kepo'),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'gender' => 'other',
            'age' => 20,
            'remember_token' => Str::random(10),
        ];
    }
}
