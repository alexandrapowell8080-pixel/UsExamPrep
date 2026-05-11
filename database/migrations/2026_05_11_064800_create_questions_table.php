<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained('exams')->onDelete('cascade');
            $table->text('extract');
            $table->text('question');
            $table->string('choiceA', 255);
            $table->string('choiceB', 255);
            $table->string('choiceC', 255);
            $table->string('choiceD', 255);
            $table->string('choiceE', 255)->nullable();
            $table->string('choiceF', 255)->nullable();
            $table->string('choiceG', 255)->nullable();
            $table->string('correct_answer', 255);
            $table->text('rationale');
            $table->string('question_type', 255);
            $table->string('image', 255);
            $table->string('url', 255);
            $table->text('wrong_answer')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
