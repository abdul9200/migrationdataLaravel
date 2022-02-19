<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('state');
            $table->integer('book_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('copy',function(Blueprint $table){
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
        Schema::dropIfExists('copy');
    }
}
