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

        $categories_names = ['Matematyka','j. polski','j. angielski','j. niemiecki','Programowanie','Chemia','Fizyka','Biologia'];
        for( $i = 0 ; $i < count($categories_names) ; $i++ ){
            $category = new Category();
            $category->name = $categories_names[$i];
            $category->save();
        }
    }
}
