<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('episodes')->nullable();
            $table->string('studios');
            $table->string('genres');
            $table->text('synopsis');
            //$table->bigInteger('created_at');
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
        Schema::dropIfExists('airings');
    }
};
