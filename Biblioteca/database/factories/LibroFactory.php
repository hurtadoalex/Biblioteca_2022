<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_libro' => $this->faker->name(),
            'autor'=> $this->faker->name().''.$this->faker->lastname(),
            'Area' => $this->faker->jobTitle(),
        ];
    }
}
