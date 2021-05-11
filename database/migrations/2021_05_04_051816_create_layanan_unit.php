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
            $table->integer('id_layanan')->unsigned();
            $table->integer('id_unit')->unsigned();
            $table->boolean('is_active');
            $table->timestamps();
            $table->foreignId('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('layanan_unit', function($table) {
            $table->foreignId('id_layanan')->references('id')->on('ref_layanan');
            $table->foreignId('id_unit')->references('id')->on('ref_layanan');
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
