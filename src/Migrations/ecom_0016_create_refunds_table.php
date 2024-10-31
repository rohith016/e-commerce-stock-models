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
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->float('amount');
            $table->text('reason');
            // status can beinitiated, processing, completed, cancelled, refunded, refunded_partially, pending_refund, partially_refunded, partially_refunded_partially, partially_refunded_completed
            $table->string('status');
            $table->timestamp('processed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('refunds');
    }
};