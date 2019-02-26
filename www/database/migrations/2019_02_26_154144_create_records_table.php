<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 150);
            $table->string('alias', 150)->unique();

            $table->string('title', 150)->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();

            $table->text('content');

            $table->integer('popular')->default(0);
            $table->integer('like')->default(0);
            $table->integer('views')->default(0);
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('category')->default(0);

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
        Schema::dropIfExists('records');
    }
}
