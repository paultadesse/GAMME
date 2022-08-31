<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $title = $this->faker->sentence(rand(5,7));
        $datetime = $this->faker->dateTimeBetween('-1 month', 'now');

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . rand(1111, 9999),
            'description' => $this->faker->sentence,
            'photo' => basename($this->faker->image(storage_path('app/public'))),
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ];
    }
}
