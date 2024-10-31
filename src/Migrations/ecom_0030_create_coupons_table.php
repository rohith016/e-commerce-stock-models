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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->float('minimum_order_value');
            $table->integer('usage_limit');
            $table->integer('used_count');
            // discount_type: percent, value
            $table->string('discount_type');
            $table->float('discount_value');
            $table->timestamp('started_at');
            $table->timestamp('expired_at');
            $table->timestamps();
            $table->softDeletes();
        });

    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('coupons');
    }
};
