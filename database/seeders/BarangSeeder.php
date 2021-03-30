<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga_barang' => '3000',
                'qty_barang' => '100'
            ],
            [
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Pocari Sweat',
                'kategori_barang' => 'Minuman',
                'harga_barang' => '6000',
                'qty_barang' => '50'
            ]
        ];
        // DB::table('barangs')->delete($data);
        DB::table('barangs')->insert($data);
    }
}
