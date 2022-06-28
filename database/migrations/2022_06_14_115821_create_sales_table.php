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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->char('sale_num');
            $table->decimal('total_base_price');
            $table->decimal('total_tax_price');
            $table->decimal('total_price');
            $table->integer('customer_id');
            $table->integer('payment_method_id');
            $table->date('date_emision');
            $table->time('time_emision');
            $table->boolean('active');
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
        Schema::dropIfExists('sales');
    }
};
