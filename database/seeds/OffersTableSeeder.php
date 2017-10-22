<?php

use Illuminate\Database\Seeder;
use App\Offer;
use App\Tag;
use App\Category;

class OffersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $locations = ['Warszawa','Kraków','Łódź','Poznań','Wrocław','Gdańsk','Szczecin','Bydgoszcz','Lublin','Katowice','Białystok','Gdynia','Częstochowa','Radom','Sosnowiec','Toruń','Kielce','Rzeszów','Gliwice','Zabrze','Bielsko-Biała','Bytom','Zielona Góra','Rybnik','Ruda Śląska'];
        $tags = ['szkoła podstawowa','matura','technikum','liceum','gimnazjum','studia','tanio','duże doświadczenie','nauczyciel'];
        $forWho = ['wszystkich','każdego','potrzebujących','Ciebie'];

        $faker = Faker\Factory::create();
        for( $i=1 ; $i <= 20 ; $i++ ){
            $offer= new Offer();
            $category = Category::inRandomOrder()->first();
            $offer->user_id=$i;
            $offer->category_id=$category->id;
            $offer->price_per_hour=$faker->numberBetween(10,60);
            $offer->name=$category->name.' dla '.$forWho[array_rand($forWho)];;
            $offer->description=$faker->sentence(40);
            $offer->location=$locations[array_rand($locations)];
            $offer->online=$faker->boolean;
            $offer->teacher_home=$faker->boolean;
            $offer->student_home=$faker->boolean;
            $offer->save();
            for( $j=1 ; $j <= 3 ; $j++ ) {
                $offer->tags()->save(new Tag(['offer_id' => $offer->id, 'name' => $tags[array_rand($tags)]]));
            }
            $offer->save();
        }

        $offer= new Offer();
        $offer->user_id=1;
        $offer->category_id=Category::where('name','Matematyka')->first()->id;
        $offer->price_per_hour=25;
        $offer->name='Matematyka | Dla maturzystów! ';
        $offer->description='Tanio, szybko, profesjonalnie , w miłej bezstresowej atmosferze i przystępnej formie. Musicie państwo wiedzieć, że bardzo wnikliwie analizują zadania, które pojawiły się do tej pory na maturach. Dzięki temu wiem, że jest kilka typów zadań, które zawsze się pojawiały i aby je rozwiązać można wykorzystać kilka sprytnych sztuczek oraz kilku konkretnych schematów, których zawsze uczę, a co przynosi oczekiwane efekty.';
        $offer->location='Bydgoszcz';
        $offer->online=1;
        $offer->teacher_home=1;
        $offer->student_home=1;
        $offer->save();
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'matura']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'technikum']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'liceum']) );
        $offer->save();

    }
}
