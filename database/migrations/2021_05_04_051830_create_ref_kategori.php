<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
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
        Schema::dropIfExists('ref_kategori');
    }
}
