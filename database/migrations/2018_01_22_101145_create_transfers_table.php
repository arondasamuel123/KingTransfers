<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('from',255);
            $table->string('to',255);
            $table->date('date');
            $table->date('return');
            $table->integer('passengers');
            $table->integer('luggage');


            $table->timestamps();
        });

        Schema::table('transfers', function($table) {
       $table->foreign('user_id')->references('id')->on('users');
   });
         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
