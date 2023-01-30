<?php

use App\Models\Exam;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $addressArray = [
            'Via ',
            'Borgo ',
            'Rotonda ',
            'Piazza ',
            'Strada ',
        ];

        for($i = 0; $i < 30; $i++){
            $newMovie = new Exam();
            $newMovie->date = $faker->date();
            $newMovie->hour = $faker->time();
            $newMovie->location = 'Piano ' . $faker->randomNumber(2, false);
            $newMovie->address = $faker->randomElement($addressArray) . $faker->words(3, true);
            $newMovie->save();
        }
    }
}
