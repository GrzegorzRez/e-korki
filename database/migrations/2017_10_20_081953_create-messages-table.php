<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('send_id')->unsigned();
            $table->integer('receive_id')->unsigned();
            $table->text('content');
            $table->timestamps();
        });

        Schema::table('messages',function (Blueprint $table) {
            $table->foreign('send_id')->references('id')->on('users');
        });
        Schema::table('messages',function (Blueprint $table) {
            $table->foreign('receive_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
