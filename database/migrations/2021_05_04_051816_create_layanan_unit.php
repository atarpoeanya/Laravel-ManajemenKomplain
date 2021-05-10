<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_unit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_layanan')->references('id')->on('layanan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_unit')->references('id')->on('unit')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('layanan_unit');
    }
}
