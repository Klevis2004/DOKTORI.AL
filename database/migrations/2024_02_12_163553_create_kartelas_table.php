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
        Schema::create('kartelas', function (Blueprint $table) {
            $table->id();
            $table->string('pacient_id')->unique();
            $table->string('emri');
            $table->string('atesia');
            $table->string('memesia');
            $table->string('mbiemri');
            $table->date('datelindja');
            $table->string('vendlindja');
            $table->string('adresa');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('grupi_gjakut');
            $table->string('gjinia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartelas');
    }
};
