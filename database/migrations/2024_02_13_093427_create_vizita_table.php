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
        Schema::create('vizita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sherbimi_id')
                ->nullable()
                ->references('id')->on('sherbimis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('kartela_id')
                ->nullable()
                ->references('id')->on('kartelas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('reminder');
            $table->date('data_fillimit');
            $table->integer('perseritja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sherbimes');
    }
};