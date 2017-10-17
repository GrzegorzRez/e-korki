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

        $names = ['Andrzej','Bartek','Cezary','Daniel','Filip','Grzegorz','Hubert','Igor','Jacek','Kacper','Lech','Łukasz','Mateusz','Nikodem','Olaf','Paweł','Robert','Stanisław','Tomasz','Władysław','Zenon'];
        $surnames = ['Nowak','Kowalski','Wiśniewski','Wójcik','Kowalczyk','Kamiński','Lewandowski','Zieliński','Szymański','Woźniak','Dąbrowski','Kozłowski','Jankowski','Mazur','Wojciechowski','Kwiatkowski','Krawczyk','Kaczmarek','Piotrowski','Grabowski','Zając','Pawłowski','Michalski','Król','Jabłoński'];
        $locations = ['Warszawa','Kraków','Łódź','Poznań','Wrocław','Gdańsk','Szczecin','Bydgoszcz','Lublin','Katowice','Białystok','Gdynia','Częstochowa','Radom','Sosnowiec','Toruń','Kielce','Rzeszów','Gliwice','Zabrze','Bielsko-Biała','Bytom','Zielona Góra','Rybnik','Ruda Śląska'];

        $faker = Faker\Factory::create();
        for( $i=0 ; $i < 100 ; $i++ ){
            $user = new User();
            $name = $names[array_rand($names)];
            $surname = $surnames[array_rand($surnames)];
            $location = $locations[array_rand($locations)];
            $email = $name.'.'.$surname.'.'.rand(1,32452).'@gmail.com';
            $user->name = $name;
            $user->surname = $surname;
            $user->location = $location;
            $user->description = $faker->sentence(64);
            $user->email = $email;
            $user->password = bcrypt('123456');
            $user->save();
            $avatar = $faker->image(public_path('uploads\avatars'),300,300, 'people');
            rename($avatar,public_path('uploads\avatars\\'.$user->id.'.jpg'));
            $user->avatar = $user->id.'.jpg';
            $user->save();
        }
    }
}
