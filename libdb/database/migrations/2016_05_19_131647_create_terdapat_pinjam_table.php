<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerdapatPinjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terdapat_pinjam', function (Blueprint $table) {
            $table->integer('id_peminjaman')->foreign()->references('id_peminjaman')->on('peminjaman');
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
        Schema::drop('terdapat_pinjam');
    }
}
