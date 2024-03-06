<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG01',
                'barang_nama' => 'Televisi',
                'harga_beli' => 1500000,
                'harga_jual' => 900,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG02',
                'barang_nama' => 'Teh Pucuk',
                'harga_beli' => 4,
                'harga_jual' => 3,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG03',
                'barang_nama' => 'Sunscreen Azzarine',
                'harga_beli' => 45,
                'harga_jual' => 50,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG04',
                'barang_nama' => 'Baju Eiger',
                'harga_beli' => 150,
                'harga_jual' => 200,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG05',
                'barang_nama' => 'Chimi Ubi',
                'harga_beli' => 10,
                'harga_jual' => 8,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG06',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 120000,
                'harga_jual' => 180000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG07',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 25,
                'harga_jual' => 35,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG08',
                'barang_nama' => 'Ultramilk',
                'harga_beli' => 15,
                'harga_jual' => 30,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG09',
                'barang_nama' => 'Sweater',
                'harga_beli' => 18,
                'harga_jual' => 30,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Sari Roti',
                'harga_beli' => 20,
                'harga_jual' => 25,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}