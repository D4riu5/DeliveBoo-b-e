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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('image')->nullable();
            $table->string('description', 255);
            $table->double('price', 5, 2);
            $table->boolean('is_available')->default(true);
            $table->enum('course', ['Antipasto', 'Primo', 'Secondo', 'Contorno', 'Dolce', 'Bevanda']);
            $table->timestamps();
        });
    }

    /**php
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
};
