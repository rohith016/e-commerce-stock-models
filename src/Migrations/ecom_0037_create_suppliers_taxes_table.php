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
        Schema::create('taxes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('rate');
            $table->string('country');
            $table->string('state')->nullable();
            $table->string('tax_type')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('tax_class')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('taxes');
    }
};
