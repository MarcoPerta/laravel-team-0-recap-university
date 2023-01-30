<?php

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newMovie = new Teacher();
            $newMovie->name = $faker->firstName();
            $newMovie->surname = $faker->lastName();
            $newMovie->phone = $faker->phoneNumber();
            $newMovie->email = $faker->email();
            $newMovie->office_address = 'Office ' . $faker->secondaryAddress();
            $newMovie->office_number = 'Office ' . $faker->randomNumber(5, false);
            $newMovie->save();
        }
    }
}
