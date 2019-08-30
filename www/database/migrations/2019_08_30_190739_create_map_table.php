<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 150);
            $table->string('alias', 150)->unique();

            $table->string('title', 150)->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->longText('content')->nullable();

            $table->tinyInteger('status')->default(0);
            $table->integer('views')->default(0);

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
        Schema::dropIfExists('map');
    }
}
