<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiPembelianBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pembelian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transaksi_pembelian_id');
            $table->foreign('transaksi_pembelian_id')->references('id')->on('transaksi_pembelian');
            $table->unsignedBigInteger('master_barang_id');
            $table->foreign('master_barang_id')->references('id')->on('master_barang');
            $table->integer('jumlah');
            $table->unsignedBigInteger('harga_satuan');
            $table->foreign('harga_satuan')->references('harga_satuan')->on('master_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
