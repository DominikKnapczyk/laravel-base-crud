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
    public function run()
    {
        $faker = \Faker\Factory::create(); // inizializza l'istanza di Faker

        for ($i = 0; $i < 10; $i++) {
            $music = new Music;
            $music->title = $faker->sentence(3); // genera un titolo casuale
            $music->album = $faker->word(); // genera un nome di album casuale
            $music->author = $faker->name(); // genera un nome di autore casuale
            $music->editor = $faker->name(); // genera un nome di editore casuale
            $music->length = $faker->numberBetween(3, 10); // genera una lunghezza casuale tra 3 e 10 minuti
            $music->poster = $faker->imageUrl(); // genera un URL di immagine casuale
            $music->save();
        }
    }
}
