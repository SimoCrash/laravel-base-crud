<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 150; $i++){
            $comic = new Comic;
            $comic->title = $faker->sentence(rand(3, 6));
            $comic->description = $faker->paragraph(2);
            $comic->thumb = 'www.google.it';
            $comic->price = $faker->randomFloat(2, 5, 20);
            $comic->series = $faker->sentence(3);
            $comic->sale_date = $faker->dateTimeThisDecade();
            $comic->type = $faker->sentence(2);
            $comic->save();
        }
    }
}
