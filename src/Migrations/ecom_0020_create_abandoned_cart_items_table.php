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
        Schema::create('abandoned_cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('abandoned_cart_id');
            $table->foreignId('product_id');
            $table->integer('quantity');
            $table->float('price_at_abandonment');
            $table->timestamps();
            $table->softDeletes();
        });

    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('abandoned_cart_items');
    }
};