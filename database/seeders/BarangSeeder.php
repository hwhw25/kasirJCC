<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_barang')->insert([
            [
                'nama_barang' => 'Sabun Batang',
                'harga_satuan' => '3000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_barang' => 'Mi Instan',
                'harga_satuan' => '2000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_barang' => 'Pensil',
                'harga_satuan' => '1000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_barang' => 'Kopi Sachet',
                'harga_satuan' => '3000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_barang' => 'Air minum galon',
                'harga_satuan' => '20000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
