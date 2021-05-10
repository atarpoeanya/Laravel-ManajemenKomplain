<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomplainKomentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komplain_komentar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_komplain')->references('id')->on('komplain')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_user_from')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_user_to')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status_komplain');
            $table->string('tanggapan');
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
        Schema::dropIfExists('komplain_komentar');
    }
}
