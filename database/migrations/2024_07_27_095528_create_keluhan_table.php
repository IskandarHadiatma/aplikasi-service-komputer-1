<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhansTable extends Migration
{
    public function up()
    {
        Schema::create('keluhans', function (Blueprint $table) {
            $table->increments('id_keluhan');
            $table->text('nama_keluhan');
            $table->integer('ongkos');
            $table->string('id_komputer', 10);
            $table->integer('customer_id');
            $table->integer('id_pegawai');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keluhans');
    }
}
