<?php

namespace Database\Seeders;

use  App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $new_comic = new Comic();

            // alla proprietà dell'oggetto creato assegno il valore della chiave dell'array associativo

            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->artists = implode(",", $comic['artists']);
            $new_comic->writers = implode(",", $comic['writers']);

            // Posso usare il metodo fill() perchè le proprietà le ho nominate come le chiavi dell'array associativo
            // $new_comic->fill($comic);
            $new_comic->save();
        }
    }
}
