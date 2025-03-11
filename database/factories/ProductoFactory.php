<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(3, true), // Nombre aleatorio con 3 palabras
            'precio' => $this->faker->randomFloat(2, 3, 15), // Precio entre 3 y 15
            'descripcion' => $this->faker->sentence(), // Descripción corta
            'stock' => $this->faker->numberBetween(10, 100), // Stock aleatorio
        ];
    }
}
