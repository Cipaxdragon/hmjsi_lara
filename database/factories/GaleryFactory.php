<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GaleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kegiatan_id' => $this->faker->numberBetween(1, 10),
            'link' => $this->faker->imageUrl(), // Generate a random image URL
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
