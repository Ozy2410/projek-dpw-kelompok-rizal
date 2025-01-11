<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kereta', function (Blueprint $table) {
            $table->id('id_kereta');
            $table->string('nama_kereta');
            $table->string('asal_kota');
            $table->string('kota_tujuan');
            $table->timestamp('waktu_keberangkatan')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('waktu_tiba')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kereta');
    }
};
