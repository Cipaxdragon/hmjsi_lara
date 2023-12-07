<?php

namespace Database\Factories;
use Database\Factories\str;
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
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence,
            'body_text' => collect($this->faker->paragraphs(mt_rand(5,10)))
            ->map(fn($p) => "<p>$p</p>")
            ->implode(''),
            'divisi_id' => $this->faker->numberBetween(1, 5),
            'tanggal' => $this->faker->dateTime(),
            'gambar' => $this->faker->imageUrl(),
            'galery_id' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
