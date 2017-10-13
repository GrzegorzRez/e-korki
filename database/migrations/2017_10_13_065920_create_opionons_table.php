<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpiononsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opionons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->string('content');
            $table->integer('grade');
            $table->timestamps();
        });

        Schema::table('opionons',function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('users');
        });
        Schema::table('opionons',function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opionons');
    }
}
