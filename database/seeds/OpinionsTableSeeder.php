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
        $opinion->content='Treść Opinii';
        $opinion->grade=5;

        $opinion->save();
    }
}
