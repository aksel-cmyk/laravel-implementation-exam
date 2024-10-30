<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('resumes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('position');
        $table->string('phone');
        $table->string('email');
        $table->string('address');
        $table->text('objective');
        $table->date('date_of_birth')->nullable();
        $table->string('place_of_birth')->nullable(); 
        $table->string('age')->nullable(); 
        $table->string('height')->nullable(); 
        $table->string('weight')->nullable(); 
        $table->string('religion')->nullable(); 
        $table->string('nationality')->nullable(); 
        $table->string('civil_status')->nullable(); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
