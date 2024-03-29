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
        Schema::create('operacionis', function (Blueprint $table) {
            $table->id();
            $table->date('data_operacionite');
            $table->string('emri_mjekut');
            $table->string('specialiteti_mjekut');
            $table->text('diagnoza');
            $table->text('arsyeja_opecionit_sipas_mjekut');
            $table->text('rezultatet_e_testimeve_paraoperimit');
            $table->string('lloji_anestezise');
            $table->string('mjeku_ansetezise');
            $table->string('lloji_opeacionit');
            $table->text('hapat_operimit');
            $table->text('mjete_perdorimi');
            $table->text('mbyllja_plages');
            $table->text('keshillat_post_operimit');
            $table->text('programi_rehabilitimit');
            $table->text('rreziqet');
            $table->text('parandalo_rreziqet');
            $table->text('emergjenca');
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
        Schema::dropIfExists('operacionis');
    }
};
