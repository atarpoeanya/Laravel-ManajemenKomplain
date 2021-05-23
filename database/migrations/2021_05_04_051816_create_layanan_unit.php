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
            $table->unsignedBigInteger('id_layanan');
            $table->unsignedBigInteger('id_unit');
            $table->boolean('is_active');
            $table->timestamps();
            $table->string('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('updated_by')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('layanan_unit', function($table) {
            $table->foreign('id_layanan')->references('id')->on('ref_layanan');
            $table->foreign('id_unit')->references('id')->on('ref_layanan');
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
