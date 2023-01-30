<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comics;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $comicsList =config('comics');

        foreach($comicsList as $data){
            $singleComics = new Comics();

            $singleComics->title = $data['title'];
            $singleComics->description = $data['description'];
            $singleComics->thumb = $data['thumb'];
            $singleComics->price = $data['price'];
            $singleComics->series = $data['series'];
            $singleComics->sale_date = $data['sale_date'];
            $singleComics->type = $data['type'];
        }
    }
}
