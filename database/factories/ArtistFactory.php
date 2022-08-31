<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $first_name = ucwords($this->faker->name);
        $last_name = ucwords($this->faker->name);
        $date_of_birth = $this->faker->dateTimeBetween('-70 years', 'now');
        $datetime = $this->faker->dateTimeBetween('-1 month', 'now');
        $biography = '';

        for ($i=0; $i < 5; $i++) { 
            $biography .= '<p class="mb-4">' . $this->faker->sentence(rand(20, 30), true) . '</p>';
        }

        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'slug' => Str::slug($first_name . '_' . $last_name),
            'biography' => $biography,
            'date_of_birth' => $date_of_birth,
            'photo' => basename($this->faker->image(storage_path('app/public'))),
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ];
    }
}
