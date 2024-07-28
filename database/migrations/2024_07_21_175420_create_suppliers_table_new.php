<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->integer('id_supplier')->primary();
            $table->string('nama_supplier', 150);
            $table->text('alamat');
            $table->string('no_hp', 15);
            $table->integer('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barangs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
