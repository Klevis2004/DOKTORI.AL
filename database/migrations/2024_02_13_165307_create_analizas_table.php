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
        Schema::create('analizas', function (Blueprint $table) {
            $table->id();
            $table->string('analizat_docs');
            $table->string('document_name');
            $table->text('description');
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
        Schema::dropIfExists('analizas');
    }
};
