<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ventilation>
 */
class VentilationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => fake()->company(),
            'name' => fake()->catchPhrase(),
            'country' => fake()->country(),
            'area' => fake()->randomNumber(2, true) . ' - ' . fake()->randomNumber(2, true),
            'price' => fake()->randomNumber(7, true),
            'description' => fake()->paragraph()
        ];
    }
}
