<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new User();
        $newUser->name = 'Alex';
        $newUser->email = 'test@gmail.com';
        $newUser->password = Hash::make('password');
        $newUser->save();
    }
}
