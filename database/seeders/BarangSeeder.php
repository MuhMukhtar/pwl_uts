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
            ],
            [
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Fruit Tea',
                'kategori_barang' => 'Minuman',
                'harga_barang' => '6000',
                'qty_barang' => '52'
            ],
            [
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Frestea',
                'kategori_barang' => 'Minuman',
                'harga_barang' => '6000',
                'qty_barang' => '44'
            ],
            [
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Mie Sedap',
                'kategori_barang' => 'Makanan',
                'harga_barang' => '3000',
                'qty_barang' => '100'
            ],
            [
                'kode_barang' => 'PRD006',
                'nama_barang' => 'Cheetos',
                'kategori_barang' => 'Makanan',
                'harga_barang' => '5000',
                'qty_barang' => '90'
            ],
            [
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Coca Cola',
                'kategori_barang' => 'Minuman',
                'harga_barang' => '5500',
                'qty_barang' => '72'
            ],
            [
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Ultra Milk',
                'kategori_barang' => 'Minuman',
                'harga_barang' => '7000',
                'qty_barang' => '34'
            ],
            [
                'kode_barang' => 'PRD009',
                'nama_barang' => 'Pop Mie',
                'kategori_barang' => 'Makanan',
                'harga_barang' => '4500',
                'qty_barang' => '78'
            ],
            [
                'kode_barang' => 'PRD010',
                'nama_barang' => 'Keripik',
                'kategori_barang' => 'Makanan',
                'harga_barang' => '2000',
                'qty_barang' => '70'
            ],
            [
                'kode_barang' => 'PRD011',
                'nama_barang' => 'Sabun Lantai',
                'kategori_barang' => 'Kebutuhan Rumah',
                'harga_barang' => '12000',
                'qty_barang' => '30'
            ],
            [
                'kode_barang' => 'PRD012',
                'nama_barang' => 'Sunlight',
                'kategori_barang' => 'Kebutuhan Rumah',
                'harga_barang' => '5000',
                'qty_barang' => '12'
            ],
            [
                'kode_barang' => 'PRD013',
                'nama_barang' => 'Rinso',
                'kategori_barang' => 'Kebutuhan Rumah',
                'harga_barang' => '33000',
                'qty_barang' => '22'
            ],
            [
                'kode_barang' => 'PRD014',
                'nama_barang' => 'Kispray',
                'kategori_barang' => 'Kebutuhan Rumah',
                'harga_barang' => '2500',
                'qty_barang' => '24'
            ],
            [
                'kode_barang' => 'PRD015',
                'nama_barang' => 'Kapur Barus',
                'kategori_barang' => 'Kebutuhan Rumah',
                'harga_barang' => '14500',
                'qty_barang' => '18'
            ],
            [
                'kode_barang' => 'PRD016',
                'nama_barang' => 'Antangin',
                'kategori_barang' => 'Obat-obatan',
                'harga_barang' => '6500',
                'qty_barang' => '74'
            ],
            [
                'kode_barang' => 'PRD017',
                'nama_barang' => 'Paracetamol',
                'kategori_barang' => 'Obat-obatan',
                'harga_barang' => '7000',
                'qty_barang' => '83'
            ],
            [
                'kode_barang' => 'PRD018',
                'nama_barang' => 'Paramex',
                'kategori_barang' => 'Obat-obatan',
                'harga_barang' => '6000',
                'qty_barang' => '50'
            ],
            [
                'kode_barang' => 'PRD019',
                'nama_barang' => 'Intunal F',
                'kategori_barang' => 'Obat-obatan',
                'harga_barang' => '4500',
                'qty_barang' => '92'
            ],
            [
                'kode_barang' => 'PRD020',
                'nama_barang' => 'Panadol',
                'kategori_barang' => 'Obat-obatan',
                'harga_barang' => '5000',
                'qty_barang' => '100'
            ]
        ];
        // DB::table('barangs')->delete($data);
        DB::table('barangs')->insert($data);
    }
}
