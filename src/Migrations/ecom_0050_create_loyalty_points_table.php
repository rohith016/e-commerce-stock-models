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
        Schema::create('loyalty_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('points');
            $table->timestamp('earned_at');
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
        Schema::drop('loyalty_points');
    }
};
