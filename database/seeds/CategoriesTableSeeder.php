<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        $categories_names = ['matematyka','j. polski','j. angielski','j. niemiecki','programowanie','chemia','fizyka','biologia', 'aktorstwo','budownictwo',
            'ekonomia','filozofia','fotografia','geografia','grafika komputerowa','historia','informatyka','j. francuski','j. hiszpański','j. rosyjski',
            'j. włoski','łacina','malarstwo','muzyka','nauczanie początkowe','wos'];
        sort($categories_names);
        for( $i = 0 ; $i < count($categories_names) ; $i++ ){
            $category = new Category();
            $category->name = $categories_names[$i];
            $category->save();
        }
    }
}
