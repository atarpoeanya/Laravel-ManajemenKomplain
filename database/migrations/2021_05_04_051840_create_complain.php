<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_layanan')->references('id')->on('ref_layanan')->onupdate('cascade')->onDelete('cascade');
            $table->foreignId('id_user')->references('id')->on('users')->onupdate('cascade')->onDelete('cascade');
            $table->string('id_kategori');
            $table->text('komplain');
            $table->string('path_bukti');
            $table->string('status_utama_komplain');
            $table->timestamps();
            $table->foreignId('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('edited_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
            
        });

       
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complain');
    }
}
