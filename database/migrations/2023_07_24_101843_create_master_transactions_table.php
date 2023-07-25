<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_transactions', function (Blueprint $table) {
            $table->id();
            $table->date('order_date');
            $table->string('order_number')->unique();
            $table->string('customer_name');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('master_products');
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_transactions');
    }
};
