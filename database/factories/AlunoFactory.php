<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nm_aluno' => fake()->name(),
            'nm_curso' => fake()->unique()->name(),
            'nu_ano' => fake()->numberBetween(2000, 2023),
            'nu_semestre' => fake()->numberBetween(1, 10)
        ];
    }
}
