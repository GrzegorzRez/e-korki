<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
      //  $this->call(UsersTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(OpinionsTableSeeder::class);
        $this->call(ResourceTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
    }
}
