<?php

namespace Database\Factories;

use App\Models\Dojo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'bio'=>fake()->realText(500),
            'skill'=> fake()->numberBetween(0, 100),
            'dojo_id'=>Dojo::inRandomOrder()->first()->id, // fetch all Dojo documents in random order, then grabs the first one and assign the 'id' value
        ];
    }
}
