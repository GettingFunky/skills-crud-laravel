<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        do {
        $name = fake()->word();
    } while (strlen($name) < 3);
        return [
            'name' => fake()->word(),
            'description'=> fake()->sentence(),
            'category'=> fake()->word(),
        ];
        }
            
        }
    