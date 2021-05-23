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
            $table->unsignedBigInteger('id_komplain');
            $table->unsignedBigInteger('id_user_from');
            $table->unsignedBigInteger('id_user_to');
            $table->string('status_komplain');
            $table->string('tanggapan');
            $table->timestamps();
            $table->foreignId('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('komplain_komentar', function($table) {
            $table->foreign('id_komplain')->references('id')->on('complain')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user_from')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user_to')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
