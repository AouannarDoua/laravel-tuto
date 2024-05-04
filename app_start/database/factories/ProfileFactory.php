<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             'name' => fake()->name(),
             'email'=>fake()->unique()->safeEmail(),
             'password'=>'$2y$10$92IXUNpk',
             'bio' => fake()->text(),
        ];
    }
}
