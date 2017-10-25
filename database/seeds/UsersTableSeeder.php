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
            $user->description='Jestem nauczycielem matematyki z dużym doświadczeniem. Korepetycji z programownia i matematyki udzielam od czasu studiów. Zapraszam na korepetycje.';
            $user->email='adam@wp.pl';
            $user->phone='570858343';
            $user->avatar = '1.jpg';
            $user->password=bcrypt('adam');
            $user->save();
        }

        if( User::find(2) == null ){
            $user= new User();
            $user->name='Jan';
            $user->surname='Wiśniewski';
            $user->location='Warszawa';
            $user->description='Witam serdecznie. Korepetycji z fizyki i matematyki udzielam od czasu studiów w Nauczycielskim Kolegium Fizyki UW (czyli od ok. 15 lat) i jest to zajęcie, które daje mi olbrzymią satysfakcję. Swoją ofertę kieruję głównie do osób chcących rzetelnie przygotować się do matury rozszerzonej. Zapraszam.';
            $user->email='jan@jan.pl';
            $user->phone='572848253';
            $user->avatar = '2.jpg';
            $user->password=bcrypt('jan');
            $user->save();
        }

        $names = ['Andrzej','Bartek','Cezary','Daniel','Filip','Grzegorz','Hubert','Igor','Jacek','Kacper','Lech','Łukasz','Mateusz','Nikodem','Olaf','Paweł','Robert','Stanisław','Tomasz','Władysław','Zenon'];
        $surnames = ['Nowak','Kowalski','Wiśniewski','Wójcik','Kowalczyk','Kamiński','Lewandowski','Zieliński','Szymański','Woźniak','Dąbrowski','Kozłowski','Jankowski','Mazur','Wojciechowski','Kwiatkowski','Krawczyk','Kaczmarek','Piotrowski','Grabowski','Zając','Pawłowski','Michalski','Król','Jabłoński'];
        $locations = ['Warszawa','Kraków','Łódź','Poznań','Wrocław','Gdańsk','Szczecin','Bydgoszcz','Lublin','Katowice','Białystok','Gdynia','Częstochowa','Radom','Sosnowiec','Toruń','Kielce','Rzeszów','Gliwice','Zabrze','Bielsko-Biała','Bytom','Zielona Góra','Rybnik','Ruda Śląska'];

        for( $i=0 ; $i < 18 ; $i++ ){
            $user = new User();
            $name = $names[array_rand($names)];
            $surname = $surnames[array_rand($surnames)];
            $location = $locations[array_rand($locations)];
            $email = $name.'.'.$surname.'.'.rand(1,32452).'@gmail.com';
            $user->name = $name;
            $user->surname = $surname;
            $user->location = $location;
            $user->description = 'Absolwent matematyki Uniwersytetu Warszawskiego z dużym doświadczeniem dydaktycznym oferuje bardzo skuteczne korepetycje z matematyki szkolnej (liceum, gimnazjum, podstawówka) oraz matematyki wyższej (rachunek prawdopodobieństwa, analiza matematyczna, algebra liniowa, statystyka i inne).';
            $user->email = $email;
            $user->phone = rand(500000000,890000000);
            $user->password = bcrypt('123456');
            $user->save();
            $user->avatar = $user->id.'.jpg';
            $user->save();
        }
    }
}
