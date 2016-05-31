<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->increments('id_pengembalian');
            $table->integer('id_peminjam')->foreign()->references('id_peminjam')->on('peminjam');
            $table->integer('id_user')->foreign()->references('id')->on('users');
            $table->timestamps('tgl_pengembalian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengembalian');
    }
}
