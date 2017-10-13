<?php

use Illuminate\Database\Seeder;
use App\Offer;

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
        $offer->price_per_hour=20;
        $offer->name='Matematyka';
        $offer->description='Opis oferty';
        $offer->save();
    }
}
