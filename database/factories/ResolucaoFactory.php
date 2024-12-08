<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resolucao>
 */
class ResolucaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->randomElement(['adicao', 'multiplicacao', 'subtracao', 'divisao']),
            'acertou' => $this->faker->numberBetween(0, 100),
            'errou' => $this->faker->numberBetween(0, 100),
            'pontuacao' => $this->faker->numberBetween(0, 100),
            'usuario_id' => User::factory(),
        ];
    }
}
