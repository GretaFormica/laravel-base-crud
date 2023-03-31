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

            $new_music = new Music;
    
            $new_music->title = $faker->word();
            $new_music->album = $faker->word();
            $new_music->author = $faker->word();
            $new_music->editor = $faker->word();
            $new_music->length = $faker->randomDigit();
            $new_music->poster = 'https://picsum.photos/200/300';
    
            $new_music->save();
        }
    }
}
