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
        Schema::create('anamnezas', function (Blueprint $table) {
            $table->id();
            $table->text('genetic_diseases');
            $table->text('hypertension');
            $table->string('physical_activity');
            $table->text('diet_habits');
            $table->string('smoking');
            $table->string('alcohol_consumption');
            $table->text('current_symptoms');
            $table->text('recent_illness');
            $table->text('medication_history');
            $table->foreignId('kartela_id')
            ->nullable()
            ->references('id')->on('kartelas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anamnezas');
    }
};
