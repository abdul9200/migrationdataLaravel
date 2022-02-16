<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate', function (Blueprint $table) {
            $table->increments('id');
            $table->float('note');
            $table->integer('user_id')->unsigned()->default(0);
            $table->integer('book_id')->unsigned()->default(1);
            $table->timestamps();
        });
        Schema::table('rate',function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('book');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate');
    }
}
