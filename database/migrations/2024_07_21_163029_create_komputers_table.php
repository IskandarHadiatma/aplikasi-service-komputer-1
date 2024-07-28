<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomputersTable extends Migration
{
    public function up()
    {
        Schema::create('komputers', function (Blueprint $table) {
            $table->string('id_komputer', 10)->primary();
            $table->string('nama_komputer', 150);
            $table->string('merek', 100);
            $table->integer('harga');
            $table->integer('stok');
            $table->string('satuan', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('komputers');
    }
}
