<?php

namespace Database\Factories;

use App\Models\Recetas;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecetasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recetas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->word(3),
            'descripcion' => $this->faker->text(25),
            'ingredientes' => $this->faker->text(35),
            'tpreparacion' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'dificultad' => $this->faker->text(10),
            'imagen' => $this->faker->imageUrl(300, 300),
            'estado' => rand(0,1),
        ];
    }
}
