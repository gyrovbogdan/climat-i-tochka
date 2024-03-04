<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conditioner>
 */
class ConditionerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $countries = ['China', 'Russia', 'Belarus', 'Japan'];;
        $brands = ['Haier', 'Toshiba', 'Hilpert LLC', 'Береста'];
        $types = config('global.types');

        return [
            'name' => fake()->catchPhrase(),
            # images , 
            'brand' => $brands[array_rand($brands)],
            'country' => $countries[array_rand($countries)],
            'description' => fake()->paragraph(5),
            'type' => $types[array_rand($types)],
            'inverter' => fake()->boolean()
        ];
    }
}
