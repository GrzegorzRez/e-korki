<?php

use Illuminate\Database\Seeder;
use App\Resource;

class ResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = new Resource();
        $resource->user_id = 1;
        $resource->title = "Pierwsza lekcja matematyki";
        $resource->content = "2+2=4. Zasada dodawania jest prosta... ble ble ble. ";
        $resource->save();

        $resource = new Resource();
        $resource->user_id = 1;
        $resource->title = "Cwiczenia z angielskiego";
        $resource->content = "Przetłumacz:
        mama -
        tata -
        pies -
        kot -
        banan -
        myszka -
        dom -
        samochód -
        mandarynka -
        szkoła -
        ";
        $resource->save();

        $resource = new Resource();
        $resource->user_id = 2;
        $resource->title = "Treść użytkownika 2";
        $resource->content = "2+2=4. Zasada dodawania jest prosta... ble ble ble. ";
        $resource->save();
        $resource = new Resource();
        $resource->user_id = 2;
        $resource->title = "Treść użytkownika 2-2";
        $resource->content = "2+2=4. Zasada dodawania jest prosta... ble ble ble. ";
        $resource->save();

        $resource = new Resource();
        $resource->user_id = 3;
        $resource->title = "Treść użytkownika 3";
        $resource->content = "2+2=4. Zasada dodawania jest prosta... ble ble ble. ";
        $resource->save();
        $resource = new Resource();
        $resource->user_id = 3;
        $resource->title = "Treść użytkownika 3 - 2";
        $resource->content = "2+2=4. Zasada dodawania jest prosta... ble ble ble. ";
        $resource->save();
    }
}
