<?php

use Illuminate\Database\Seeder;
use App\Opinion;
class OpinionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opinion = new Opinion();
        $opinion->teacher_id=1;
        $opinion->student_id=1;
        $opinion->content='Spoko ziomek, dobrze uczy';
        $opinion->grade=5;
        $opinion->save();

        $faker = Faker\Factory::create();
        for( $i=1 ; $i <= 15 ; $i++ ){
            for( $j=1 ; $j <= 5 ; $j++ ) {
                $opinion = new Opinion();
                $opinion->teacher_id=$i;
                $opinion->student_id=$i+$j;
                $opinion->content = $faker->sentence(10);
                $opinion->grade = $faker->numberBetween(1, 6);
                $opinion->save();
            }
        }
    }
}
