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
        /* $table->string('brand');
            $table->string('name');
            $table->string('country');
            $table->string('area');
            $table->integer('price');
            $table->text('description'); */
        $countries = ['China', 'Russia', 'Belarus', 'Japan'];
        $areas = ['10 - 25', '25 - 50', '50 - 75', '75 - 100'];
        // $brands = ['Haier', 'Toshiba', 'Hilpert LLC'];
        return [
            'brand' => fake()->company(),
            'name' => fake()->catchPhrase(),
            'country' => $countries[array_rand($countries)],
            'area' => $areas[array_rand($areas)],
            'price' => fake()->randomNumber(7, true),
            'description' => fake()->paragraph()
        ];
    }
}
