<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPertanyaanRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_pertanyaan_rating', function (Blueprint $table) {
            $table->id();
            $table->text('pertanyaan');
            $table->boolean('is_active');
            $table->timestamps();
            $table->string('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('updated_by')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_pertanyaan_rating');
    }
}
