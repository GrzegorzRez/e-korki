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
        $message->send_id=1;
        $message->receive_id=2;
        $message->content='Witam, ma Pan ochotę mnnie pouczyć?';
        $message->save();

        $faker = Faker\Factory::create();
        for($j=1; $j<=6; $j++)
        	{
	        for( $i=1 ; $i <= 99 ; $i++ )
	        	{
	                $message = new Message();
	                $message->send_id=$i;
	                $message->receive_id=$i+1;
	                $message->content = $faker->sentence(20);
	                $message->save();
	        	}

	        for( $i=100 ; $i >= 2 ; $i-- )
	        	{
	                $messege = new Message();
	                $message->send_id=$i;
	                $message->receive_id=$i-1;
	                $message->content = $faker->sentence(20);
	                $message->save();
	        	}
	        }
    }
}