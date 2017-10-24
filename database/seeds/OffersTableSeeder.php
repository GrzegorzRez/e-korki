<?php

use Illuminate\Database\Seeder;
use App\Offer;
use App\Tag;
use App\Category;
use App\User;

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
        //zmienne do kreowanej oferty
        $greetings = ['Witam. ', 'Witam zainteresowanych!', 'Dzień dobry!', 'Cześć!','Siema. ','Witam serdecznie. ','Czołem internet. '];
        $aboutme = ['Mam na imię ', 'Jestem ', 'Nazywam się ','Z tej strony '];
        $admission = ['Twoją piętą achillesową jest ', 
            'Uczysz się niemal 24godziny/dobe, a mimo to wciąż problemem jest dla Ciebie ', 
            'Chciałbyś/chciałabyś poszerzyć swoja wiedzę z zakresu bardzo trudnej dziedziny, jaką niewątpliwie jest ', 
            'Szukasz osoby, która jest ekspertem w dziedzinie: ', 
            'Szukasz korepetytora z prawdziwwego zdarzenia, a Twoim największym przekleństwem jest ', 
            'Potrzebujesz nauczyciela, który sprawi, że nigdy więcej problemem dla Ciebie nie będzie ', 
            'Szukasz osoby, której pasją jest ',
            'Masz dużą wiedzę, ale wiesz, że stać Cię na jeszcze więcej? Szukasz kogoś, kto wniesie Cię na wyższy poziom w dziedzienie ',
        ];
        $neutral = ['Szybko, tanio i przyjemnie - tak w trzech słowach można określić korepetycje, które prowadzę. Jeżeli cenisz sobie jakość i miłą atmosfere podczas zajęć - ta oferta jest właśnie dla Ciebie! Nie czekaj - napisz do mnie, ustalmy termian i bierzmy się do roboty! :)', 
        'Od wielu lat prowadzę korepetycję z różnych przedmiotów, w których czuję się wystarczająco kompetentną osobą. Oferuję wszystko co nalepsze: wiedzę, jakość, dobrą atmosferę podczas zajęć. Jedyne czego oczekuję od Ciebie to zaangażowanie! Daj mi szanse, a razem zdziałamy bardzo wiele.', 
        'Korepetycje w przestępnej cenie i przestępnej formie - to dewiza mojego działania. Skontaktuj się ze mną - nie ma czasu do stracenia!:)', 
        'Posiadam odpowiednią wiedzę i kompetencje, aby Tobie pomóc! Napisz do mnie, porozmawiajmy o szczegółach współpracy i Twoich oczekiwaniach.', 
        'Korepetycję traktuję bardzo poważnie - to w końcu nasz wspólny czas i Twoje pieniądze. Bez obaw - jestem kometentną osobą, aby Ci pomóc. Wspólnie możemy osiągnąć wszystko!',
        'Korepetycje to dla mnie świetny sposób, aby spełniać się jako nauczyciel. Dołącz do grona zadowolonych uczniów i napisz do mnie jeszcze dziś!',
        'W korepetycjach nie chodzi tylko o to, by nauczyciel miał wiedzę, lecz by potrafił tą wiedzę przekazać. Z czystym sumieniem mogę powiedzieć, że jestem takim nauczycielem. Napisz do mnie i rozpocznijmy współpracę jeszcze dziś!',
        'Daj mi szansę, a przekażę Ci całą swoją wiedzę. Tylko od Ciebie będzię zależeć jak ją wykorzystasz.',
        'Przekazywanie wiedzy innym nie stanowi dla mnie żadnego problemu. Skontaktuj się ze mną, aby dogadać szczegóły. Uwierz mi - WARTO :)',
        'Moja wiedza i Twoje zaangażowanie to idealna mieszanka, aby osiągnąć sukces. Napisz do mnie jeszcze dziś i przekonaj się, że zajęcia ze mną są warte swojej ceny!:)',
    ];

        $faker = Faker\Factory::create();
        for( $i=1 ; $i <= 20 ; $i++ ){
            $offer= new Offer();
            $category = Category::inRandomOrder()->first();
            $offer->user_id=$i;
            $user = User::find($i);
            $offer->category_id=$category->id;
            $offer->price_per_hour=$faker->numberBetween(10,60);
            $offer->name=$category->name.' dla '.$forWho[array_rand($forWho)];;
            $offer->description=$greetings[array_rand($greetings)].' '.$aboutme[array_rand($aboutme)].$user->name.'. '.$admission[array_rand($admission)].$category->name.'? Jesteś w dobrym miejscu! '.$neutral[array_rand( $neutral)];
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

        $offer= new Offer();
        $offer->user_id=2;
        $offer->category_id=Category::where('name','Informatyka')->first()->id;
        $offer->price_per_hour=70;
        $offer->name='Udzielę korepetycji z informatyki';
        $offer->description='Witaj,
Serdecznie zapraszam na intensywne profesjonalne przygotowanie do matury z informatyki 2018 oraz 2019.
Wiążesz swoją przyszłość z informatyką? Potrzebujesz dobrego wyniku z matury z informatyki, żeby dostać się na wymarzoną uczelnię? Chcesz solidnie opanować niezbędne zagadnienia informatyczne? Chcesz już w trakcie przygotowań do matury uczyć się najnowszych standardów, które panują obecnie na rynku IT? W takim razie to ogłoszenie jest dla Ciebie :)';
        $offer->location='Warszawa';
        $offer->online=0;
        $offer->teacher_home=1;
        $offer->student_home=0;
        $offer->save();
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'matura']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'technikum']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'liceum']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'rozszerzenie']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'100%']) );
        $offer->save();

        $offer= new Offer();
        $offer->user_id=2;
        $offer->category_id=Category::where('name','Programowanie')->first()->id;
        $offer->price_per_hour=60;
        $offer->name='Udzielę korepetycji z programowania';
        $offer->description='Witaj,
Serdecznie zapraszam na profesjonalny, intensywny kurs programowania w językach Java, Java Script, C, C++, Python, C# oraz HTML, CSS, Spring, Spring Boot, JPA, Hibernate, QT, Windows Forms, ADO NET, ASP NET i innych powiązanych.';
        $offer->location='Warszawa';
        $offer->online=1;
        $offer->teacher_home=1;
        $offer->student_home=0;
        $offer->save();
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'Java']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'C++']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'Spring']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'HTML']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'Python']) );
        $offer->save();

        $offer= new Offer();
        $offer->user_id=16;
        $offer->category_id=Category::where('name','Chemia')->first()->id;
        $offer->price_per_hour=150;
        $offer->name='Nauka chemii nie tylko dla zasady ;)';
        $offer->description='Profesjonalne podejście i dobry kontakt sprawią, że odniesiesz swój Sukces. Gwarantuję wysoki poziom kultury osobistej oraz otwartość na indywidualne potrzeby Uczniów. Chemia jest moją pasją, jest ciekawa, logiczna – nie trzeba uczyć się jej na pamięć. Jeśli dobrze poznasz i zrozumiesz jej podstawy stanie się wprost oczywista!';
        $offer->location='Gdańsk';
        $offer->online=0;
        $offer->teacher_home=0;
        $offer->student_home=1;
        $offer->save();
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'pierwiastki']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'matura']) );
        $offer->save();

        $offer= new Offer();
        $offer->user_id=3;
        $offer->category_id=Category::where('name','Programowanie')->first()->id;
        $offer->price_per_hour=65;
        $offer->name='Udzielę korepetycji z programowania';
        $offer->description='C, C++, Qt, Java, C#, Python, Bash, SQL, Linux, algorytmika, struktury danych, JavaScript, Ajax, PHP, Html, CSS, systemy operacyjne, olimpiady informatyczne, projekty – również przez Skype / TeamViewer.';
        $offer->location='Zabrze';
        $offer->online=1;
        $offer->teacher_home=1;
        $offer->student_home=1;
        $offer->save();
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'PHP']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'JavaScript']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'CSS']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'HTML']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'Python']) );
        $offer->save();

        $offer= new Offer();
        $offer->user_id=19;
        $offer->category_id=Category::where('name','Biologia')->first()->id;
        $offer->price_per_hour=200;
        $offer->name='Biologia w innym wymiarze!';
        $offer->description='Inna Filozofia Edukacji – Profesjonalne, indywidualne zajęcia, w przyjaznej atmosferze, dostosowane do potrzeb i oczekiwań ucznia. Wiem, jak ważna jest edukacja, oferuję najwyższy poziom nauczania.

Zapraszam Maturzystów oczekujących wysokich wyników z egzaminu, Uczniów Gimnazjum przygotowujących się do Konkursu Biologicznego, Licealistów startujących w zawodach Olimpiady Biologicznej także Studentów, w szczególności kierunku biotechnologia. ';
        $offer->location='Leszno';
        $offer->online=0;
        $offer->teacher_home=1;
        $offer->student_home=1;
        $offer->save();
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'matura']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'olimpiady']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'finalista olimpiady']) );
        $offer->save();

        $offer= new Offer();
        $offer->user_id=4;
        $offer->category_id=Category::where('name','Programowanie')->first()->id;
        $offer->price_per_hour=70;
        $offer->name='Programowanie PHP i nie tylko!';
        $offer->description='Programowanie w PHP oraz technologie webowe. Mam doświadczenie w PHP, Laravel, HTML, CSS, Sass, Less, Slim, Twitter Bootstrap, Foundation, Gulp, Git, GitHub, Vue.js i wielu więcej.';
        $offer->location='Wrocław';
        $offer->online=1;
        $offer->teacher_home=0;
        $offer->student_home=1;
        $offer->save();
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'PHP']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'Laravel']) );
        $offer->tags()->save( new Tag(['offer_id'=>$offer->id , 'name'=>'HTML']) );
        $offer->save();

    }
}
