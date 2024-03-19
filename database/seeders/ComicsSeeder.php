<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // recupera e salva i dati del comics.php
        // in questi casi sempre meglio usare config per comodità
        $comics = config('comics');

        foreach ($comics as  $comic_singolo_elemento){
            $new_comic = new Comic();
             $new_comic->title = $comic_singolo_elemento['title'];
             $new_comic->description = $comic_singolo_elemento['description'];
             $new_comic->price = $comic_singolo_elemento['price'];
             $new_comic->series = $comic_singolo_elemento['series'];
             $new_comic->sale_date = $comic_singolo_elemento['sale_date'];
             $new_comic->type = $comic_singolo_elemento['type'];
             // save per salvare tutto nel database
            $new_comic->save();
        }
    }
}
