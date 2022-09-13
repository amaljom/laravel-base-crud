<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *$table->id();
     * @return void
     */
    public function run(Faker $faker)
    {
        $type= 'comic-book';
        for ($i=0; $i < 10; $i++) { 
            $newComic = new Comic();
            $newComic->title = $faker->realText(30);
            $newComic->description = $faker->paragraph(2, true);
            $newComic->thumb = $faker->imageUrl(400, 400, 'comics');
            $newComic->price= $faker->randomDigit();
            $newComic->series= $faker->name();
            $newComic->sale_date = $faker->date();
            $newComic->type =$type;

            $newComic->save();
        }
    }
}
