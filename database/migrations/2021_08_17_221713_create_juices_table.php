<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juices', function (Blueprint $table) {
            $table->id();
            $table->string('juicename');
            $table->integer('number');
            $table->string('image');
            $table->integer('nicotin');
            $table->string('flavor');
            $table->string('brand');
            $table->double('price');
            $table->double('Sell Price');
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
        Schema::dropIfExists('juices');
    }
}
