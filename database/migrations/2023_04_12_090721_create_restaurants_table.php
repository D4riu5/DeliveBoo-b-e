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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->string('address', 128);
            $table->string('PIVA', 11);
            $table->string('image')->nullable();
            $table->decimal('prezzo_spedizione', 8, 2)->default(0);
            $table->float('avg_rating')->nullable();
            // $table->smallInteger('total_reviews')->nullable()->unsigned();
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
        Schema::dropIfExists('restaurants');
    }
};
