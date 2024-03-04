<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConditionerModel>
 */
class ConditionerModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $areas = config('global.areas');

        return [
            'name' => fake()->bothify('?????-#####'),
            'area' => $areas[array_rand($areas)],
            'price' => fake()->randomNumber(5, true),
            'promo_price' => fake()->boolean() ? fake()->randomNumber(5, true) : null,
            'performance_cold' => fake()->randomFloat(1, 10, 20),
            'performance_warm' => fake()->randomFloat(1, 10, 20),
            'power_input_cold' => fake()->randomFloat(1, 10, 20),
            'power_input_warm' => fake()->randomFloat(1, 10, 20),
            'indoor_sizes' => fake()->randomNumber(3, true) . 'x' . fake()->randomNumber(3, true) . 'x' . fake()->randomNumber(3, true)
        ];
    }
}
