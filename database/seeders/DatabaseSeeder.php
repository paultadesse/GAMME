<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Work;
use App\Models\Exhibition;
use App\Models\ExhibitionImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Artist::factory(19)->create();
        $exhibitions = Exhibition::factory(10)->create()->each(function($exhibition){
            ExhibitionImage::factory(rand(1,3))->create([
                'exhibition_id' => $exhibition->id
            ]);
        });

        Artist::factory(19)->create()->each(function($artist) use($exhibitions) {
            $artist->exhibitions()->attach($exhibitions->random(2));
            Work::factory(rand(1,4))->create([
                'artist_id' => $artist->id
            ]);
        });
    }
}
