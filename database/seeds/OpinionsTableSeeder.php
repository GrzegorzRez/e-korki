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

        $opinions = ['Lekcje u tego Pana pomogły mi zaliczyć matematykę na 4 w drugiej klasie (mam bardzo wymagającego nauczyciela)',
            'Kiedy zaczęliśmy wspólną naukę moje oceny zdecydowanie się poprawiły. Nauczyłam się też systematyczności co w moim przypadku było praktycznie cudem :D Zawsze miałam z tym problem.',
            'Pierwsze dwa tygodnie lekcji i dostałem +4 z kartkówki z funkcji liniowej. Na pewno zostanę na cały rok, bardzo polecam.',
            'Chodzę na lekcje z matematyki i fizyki, robimy mnóstwo zadań i coraz więcej rozumiem. Bardzo mądry prowadzący, super lekcje. Polecam każdemu ;)',
            'Przerabiamy wszystkie tematy do matury według przygotowanego planu. Jestem bardzo zadowolona.',
            'Super korepetycje, dzięki tym lekcjom udało mi się napisać maturę z matematyki rozszerzonej z bardzo wysokim wynikiem i teraz jestem studentem lekarskiego już drugi rok :) ',
            'Wszystkim bardzo mocno polecam te korepetycje! Niesamowity nauczyciel, najlepsza atmosfera i dużo wiedzy na każdej lekcji :) ',
            'Wybitny nauczyciel, fantastyczna atmosfera i przede wszystkim efekty. Sama tez korzystała z tych korepetycji i bardzo je chwaliła.',
            'Mój nauczyciel w szkole jest bardzo wymagający i poziom rozszerzony jest dosc trudny ale dałam radę dzięki dodatkowym lekcjom :) ',
            'Bardzo dobrze się współpracowało, oceny poszły w górę i rodzice zadowoleni. Oceniam na 5/5',
            'Jestem sporo czasu za granica i niestety nie jestem w stanie dopilnować wszystkiego u Zosi w szkole. Okazało się, ze był to strzał w dziesiątkę.',
            'Uczyłam się rozszerzenia nie mając go w szkole. Dużo pracy trzeba było włożyć ale bez tych lekcji nie udało by się tego osiągnąć. Polecam ogromnie',
            'Uczyliśmy się intensywnie funkcji oraz przekształceń, po kilku zajęciach wszystko zrozumialam. Dodatkowo polecilam zajęcia mojej przyjaciółce i dostałam z tego powodu jedna lekcje gratis.',
            'Poprawka zaliczona, bardzo dziękuje za pomoc i polecam!',
            'Polecaaam, chodzę do drugiej gimnazjum i mam 5 na koniec z matematyki, super lekcje, dużo mi dały ;)',
            'Nauczyciel z powołania, wielka wiedza, wyczucie i kultura osobista. Przy okazji jeszcze raz bardzo Panu dziękuję za pomoc :).',
            'Zdecydowanie dużo się nauczyłem na tych korepetycjach, bardzo fajna atmosfera i motywacja. Przewiduje wynik około 80-90% z matury z matmy podstawowej. Polecam.'];

        $faker = Faker\Factory::create();
        for( $i=1 ; $i <= 15 ; $i++ ){
            for( $j=1 ; $j <= 5 ; $j++ ) {
                $opinion = new Opinion();
                $opinion->teacher_id=$i;
                $opinion->student_id=$i+$j;
                $opinion->content = $opinions[array_rand($opinions)];
                $opinion->grade = $faker->numberBetween(4, 6);
                $opinion->save();
            }
        }
    }
}
