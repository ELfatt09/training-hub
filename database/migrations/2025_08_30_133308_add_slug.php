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
        Schema::table('trainings', function (Blueprint $table) {
            if (!Schema::hasColumn('trainings', 'slug')) {
                $table->string('slug')->after('title')->unique()->index()->nullable();
            }
        });
        Schema::table('training_sections', function (Blueprint $table) {
            if (!Schema::hasColumn('training_sections', 'slug')) {
                $table->string('slug')->after('title')->unique()->index()->nullable();
            }
        });
        Schema::table('training_materials', function (Blueprint $table) {
            if (!Schema::hasColumn('training_materials', 'slug')) {
                $table->string('slug')->after('title')->unique()->index()->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trainings', function (Blueprint $table) {
            if (Schema::hasColumn('trainings', 'slug')) {
                $table->dropColumn('slug');
            }
        });
        Schema::table('training_sections', function (Blueprint $table) {
            if (Schema::hasColumn('training_sections', 'slug')) {
                $table->dropColumn('slug');
            }
        });
        Schema::table('training_materials', function (Blueprint $table) {
            if (Schema::hasColumn('training_materials', 'slug')) {
                $table->dropColumn('slug');
            }
        });
    }
};

