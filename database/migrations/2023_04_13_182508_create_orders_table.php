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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->double('total_price', 6, 2);
            $table->enum('status', array('In Preparazione', 'In Consegna', 'Consegnato', 'Cancellato'));
            $table->tinyInteger('rating')->nullable();
            $table->string('delivery_address', 128);
            $table->string('delivery_contact', 15);
            $table->string('costumer_name', 64);
            $table->dateTime('order_date')->format('d-m-Y H:i:s');
            $table->string('rate_token')->nullable()->unique();
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
        Schema::dropIfExists('orders');
    }
};
