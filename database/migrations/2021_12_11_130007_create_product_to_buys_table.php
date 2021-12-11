<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductToBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_to_buys', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('season_id')->unsigned()->nullable();
            $table->bigInteger('movie_id')->unsigned()->nullable();
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_to_buys');
    }
}
