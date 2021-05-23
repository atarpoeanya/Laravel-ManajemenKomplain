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
            $table->unsignedBigInteger('id_pertanyaan');
            $table->unsignedBigInteger('id_komplain');
            $table->text('jawaban');
            $table->boolean('is_active');
            $table->timestamps();
            $table->string('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('updated_by')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('jawaban_rating', function($table) {
            $table->foreign('id_pertanyaan')->references('id')->on('ref_pertanyaan_rating')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_komplain')->references('id')->on('complain')->onUpdate('cascade')->onDelete('cascade');
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
