<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'body_text' => $this->faker->paragraph,
            'tanggal' => $this->faker->dateTime(),
            'gambar' => $this->faker->imageUrl(),
            'galery_id' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
