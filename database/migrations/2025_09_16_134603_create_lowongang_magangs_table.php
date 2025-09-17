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
        Schema::create('lowongan_magangs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('banner')->nullable();
            $table->string('company_name');
            $table->string('company_logo')->nullable();
            $table->string('residence');
            $table->string('location');
            $table->enum('type', ['full-time', 'part-time'])->default('full-time');
            $table->date('start_date');
            $table->integer('minimum_salary');
            $table->integer('maximum_salary');
            $table->string('whatsapp_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan_magangs');
    }
};
