<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $message = new Message();
        $message->send_id=2;
        $message->receive_id=1;
        $message->content='Kiedy ma pan czas wolny?';
        $message->save();

        $message = new Message();
        $message->send_id=3;
        $message->receive_id=1;
        $message->content='Czy jest możliwość odbycia korepetycji godzinach wieczornych?';
        $message->save();

        $message = new Message();
        $message->send_id=4;
        $message->receive_id=1;
        $message->content='Witam, ma Pan ochotę mnnie pouczyć?';
        $message->save();

        $message = new Message();
        $message->send_id=4;
        $message->receive_id=2;
        $message->content='Oczywiście!';
        $message->save();

    }
}
