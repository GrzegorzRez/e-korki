<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new User();
        $user->name='Adam';
        $user->surname='Nowak';
        $user->location='Bydgoszcz';
        $user->description='Opis';
        $user->email='adam@adam.pl';
        $user->password=bcrypt('adam');

        $user->save();
    }
}
