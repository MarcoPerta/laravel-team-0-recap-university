<?php

use App\Models\Course;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $corsiArray = [
            'Scienze Matematiche e Informatiche',
            'Scienze fisiche',
            'Scienze chimiche',
            'Scienze della Terra',
            'Scienze giuridiche',
            'Scienze economiche e statistiche',
            'Scienze politiche e sociali',
            'Ingegneria civile e Architettura',
        ];

        for($i = 0; $i < 20; $i++){
            $newMovie = new Course();
            $newMovie->name = 'Corso di ' . $faker->randomElement($corsiArray);
            $newMovie->description = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $newMovie->period = $faker->randomElement(['I Semestre', 'II Semestre', 'III Semestre']);
            $newMovie->year = $faker->year();
            $newMovie->cfu = $faker->numberBetween(0, 100);
            $newMovie->website = $faker->url();
            $newMovie->save();
        }
    }
}
