<?php

use Illuminate\Database\Seeder;
use App\Offer;
use App\Tag;

class OffersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*user_id price_per_hour name description*/
        $offer= new Offer();
        $offer->user_id=1;
        $offer->category_id=1;
        $offer->price_per_hour=20;
        $offer->name='Matematyka';
        $offer->description='Opis oferty';
        $offer->location='Bygoszcz';
        $offer->online=1;
        $offer->teacher_home=1;
        $offer->student_home=1;
        $offer->save();
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'elo']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'tag numer 2']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'tag numer 3']) );
        $offer->save();

        $locations = ['Warszawa','Kraków','Łódź','Poznań','Wrocław','Gdańsk','Szczecin','Bydgoszcz','Lublin','Katowice','Białystok','Gdynia','Częstochowa','Radom','Sosnowiec','Toruń','Kielce','Rzeszów','Gliwice','Zabrze','Bielsko-Biała','Bytom','Zielona Góra','Rybnik','Ruda Śląska'];

        $faker = Faker\Factory::create();
        for( $i=1 ; $i <= 100 ; $i++ ){
            $offer= new Offer();
            $offer->user_id=$i;
            $offer->category_id=2;
            $offer->price_per_hour=$faker->numberBetween(2,50);
            $offer->name=$faker->word;
            $offer->description=$faker->sentence(40);
            $offer->location=$locations[array_rand($locations)];
            $offer->online=$faker->boolean;
            $offer->teacher_home=$faker->boolean;
            $offer->student_home=$faker->boolean;
            $offer->save();
            for( $j=1 ; $j <= 10 ; $j++ ) {
                $offer->tags()->save(new Tag(['offer_id' => $offer->id, 'name' => $faker->word]));
            }
            $offer->save();
        }
    }
}
