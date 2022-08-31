<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExhibitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(5,7));
        $starting_datetime = $this->faker->dateTimeBetween('-1 month', 'now');
        $end_datetime = $this->faker->dateTimeBetween('now', '+3 month');
        $datetime = $this->faker->dateTimeBetween('-1 month', 'now');

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . rand(1111, 9999),
            'description' => $this->faker->sentence,
            'cover_image' => basename($this->faker->image(storage_path('app/public'))),
            'starting_date' =>  $starting_datetime,
            'end_date' => $end_datetime,
            'is_active' => true,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ];
    }
}
