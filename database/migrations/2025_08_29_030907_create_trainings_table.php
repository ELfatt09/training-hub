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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('major_id')->nullable()->constrained('majors')->nullOnDelete();
            $table->string('slug')->unique()->index()->nullable();
            $table->string('author')->nullable();
            $table->string('contact')->nullable();
            $table->string('location')->nullable();
            $table->string('title');
            $table->string('banner')->nullable();
            $table->text('description');
            $table->enum('type', ['online', 'hybrid', 'offline'])->default('online');
            $table->boolean('have_certificate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
