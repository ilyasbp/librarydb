<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerdapatKembaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terdapat_kembali', function (Blueprint $table) {
            $table->integer('id_pengembalian')->foreign()->references('id_pengembalian')->on('pengembalian');
            $table->integer('id_buku')->foreign()->references('id_buku')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('terdapat_kembali');
    }
}
