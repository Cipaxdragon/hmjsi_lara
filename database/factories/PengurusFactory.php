<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengurusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'divisi_id' => $this->faker->numberBetween(1,5),
            'jabatan' => $this->faker->numberBetween(1,3),
            'medsos' => $this->faker->email(),
            'gambar' => $this->faker->email(),
        ];
    }
}
