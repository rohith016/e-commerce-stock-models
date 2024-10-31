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
        Schema::create('gift_card_usages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gift_card_id');
            $table->foreignId('order_id');
            $table->float('used_amount');
            $table->timestamp('used_at');
            $table->timestamps();
            $table->softDeletes();
        });

    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('gift_card_usages');
    }
};
