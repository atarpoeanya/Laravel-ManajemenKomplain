<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_rating', function (Blueprint $table) {
            $table->id();
            $table->index(['id_pertanyaan', 'id_komplain']);
            $table->foreignId('id_pertanyaan')->references('id')->on('pertanyaan_rating')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_komplain')->references('id')->on('komplain')->onUpdate('cascade')->onDelete('cascade');
            $table->text('jawaban');
            $table->boolean('is_active');
            $table->timestamps();
            $table->foreignId('created_by')->references('username')->on('user')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('updated_by')->references('username')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_rating');
    }
}
