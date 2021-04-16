<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
         
           
         
            $table->datetime('releaseDate');
          
          
          
           $table->unsignedBigInteger('authorId');
           $table->foreign('authorId')->references('id')->on('authors');
          
          
           $table->unsignedBigInteger('genreId');
           $table->foreign('genreId')->references('id')->on('genres');
          
          
           $table->unsignedBigInteger('conditionId');
           $table->foreign('conditionId')->references('id')->on('conditions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
