<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id('id_booking');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_kereta');
            $table->string('nomor_kursi');
            $table->string('gerbong');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_kereta')->references('id_kereta')->on('kereta')->onDelete('cascade');

            $table->unique(['id_kereta', 'nomor_kursi']); // Constraint unik untuk mencegah duplikasi kursi
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
