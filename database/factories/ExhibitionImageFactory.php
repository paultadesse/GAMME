<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExhibitionImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $datetime = $this->faker->dateTimeBetween('-1 month', 'now');

        return [
            'photo' => basename($this->faker->image(storage_path('app/public'))),
            'created_at' => $datetime,
            'updated_at' => $datetime,    
        ];
    }
}
