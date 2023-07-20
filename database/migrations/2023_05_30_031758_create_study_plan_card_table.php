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
        Schema::create('study_plan_card', function (Blueprint $table) {
            $table->id();
            $table->string('name_student');
            $table->string('nim');
            $table->string('name_subject');
            $table->string('code_subject');
            $table->string('code_class');
            $table->string('sks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_plan_card');
    }
};
