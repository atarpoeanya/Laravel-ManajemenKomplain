<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_unit', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('level');
            $table->boolean('is_active');
            $table->timestamps();
            $table->unsignedBigInteger('id_unit_parent')->nullable();
            $table->string('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('updated_by')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('ref_unit', function($table) {
            $table->foreign('id_unit_parent')->references('id')->on('ref_unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_unit');
    }
}
