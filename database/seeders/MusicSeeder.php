<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Music;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_music = new Music;

        $new_music->title = 'Titolo';
        $new_music->album = 'Album';
        $new_music->author = 'Autore';
        $new_music->editor = 'Editore';
        $new_music->length = 'Durata';
        $new_music->poster = 'Immagine';

        $new_music->save();
    }
}
