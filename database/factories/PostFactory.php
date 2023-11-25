<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(10),
            'body' => $this->faker->paragraph(100),
            'user_id' => mt_rand(1,5),
            'divisi_id' => mt_rand(1,5),
        ];
    }


}
