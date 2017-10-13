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

        if( User::find(1) == null ){
            $user= new User();
            $user->name='Adam';
            $user->surname='Nowak';
            $user->location='Bydgoszcz';
            $user->description='Opis życia i kom jestem';
            $user->email='adam@adam.pl';
            $user->password=bcrypt('adam');
            $user->save();
        }

        $faker = Faker\Factory::create();
        for( $i=0 ; $i < 100 ; $i++ ){
            $user = new User();
            $user->name=$faker->firstName();
            $user->surname=$faker->lastName;
            $user->location=$faker->city;
            $user->description=$faker->sentence(64);
            $user->email=$faker->email;
            $user->password=bcrypt('123456');
            $user->save();
        }
    }
}
