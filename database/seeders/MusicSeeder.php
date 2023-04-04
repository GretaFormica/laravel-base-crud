<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Music;
use Faker\Generator as Faker;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<100; $i++) {

            $music = new Music;
    
            $music->title = $faker->word();
            $music->album = $faker->word();
            $music->author = $faker->word();
            $music->editor = $faker->word();
            $music->length = $faker->randomDigit();
            $music->poster = 'https://picsum.photos/200/300';
    
            $music->save();
        }
    }
}
