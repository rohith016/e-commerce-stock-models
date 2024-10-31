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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->string('payment_method');
            $table->float('amount');
            // status can be completed, cancelled, pending, rejected, failed
            $table->string('status');
            $table->string('transaction_id');
            $table->timestamp('payment_at');
            $table->timestamps();
            $table->softDeletes();
        });

    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('payments');
    }
};