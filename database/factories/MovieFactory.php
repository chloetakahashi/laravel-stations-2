<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word,
            'image_url' => $this->faker->imageUrl(),
            'published_year' => $this->faker->year,
            'genre_id' => Genre::insertGetId(['name' => 'ジャンル']),
            'description' => $this->faker->realText(20),
            'is_showing' => $this->faker->boolean,
        ];
    }
}
