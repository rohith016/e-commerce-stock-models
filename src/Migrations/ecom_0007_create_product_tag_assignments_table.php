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
        Schema::create('product_tag_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->integer('product_tag_id');
            $table->timestamp('assigned_at');
            $table->timestamps();
            $table->softDeletes();
        });

    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('product_tag_assignments');
    }
};