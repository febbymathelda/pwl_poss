<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualanData = [
            [
                'user_id' => 3,
                'pembeli' => 'Maya Sintia',
                'penjualan_kode' => 'PJN001',
                'penjualan_tanggal' => '2024-03-03 10:15:00',
                'created_at' => '2024-03-05 11:15:00',
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Cinta Laura',
                'penjualan_kode' => 'PJN002',
                'penjualan_tanggal' => '2024-03-03 15:00:00',
                'created_at' => '2024-03-05 13:00:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Christian',
                'penjualan_kode' => 'PJN003',
                'penjualan_tanggal' => '2024-02-03 20:15:00',
                'created_at' => '2024-02-03 20:15:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Malika',
                'penjualan_kode' => 'PJN004',
                'penjualan_tanggal' => '2024-02-03 17:45:00',
                'created_at' => '2024-02-03 17:45:00',
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Putra Saputra',
                'penjualan_kode' => 'PJN005',
                'penjualan_tanggal' => '2024-03-12 15:15:00',
                'created_at' => '2024-03-12 15:15:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Angga Yunanda',
                'penjualan_kode' => 'PJN006',
                'penjualan_tanggal' => '2024-03-12 16:30:00',
                'created_at' => '2024-03-12 16:30:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Luna Maya',
                'penjualan_kode' => 'PJN007',
                'penjualan_tanggal' => '2024-01-25 21:30:00',
                'created_at' => '2024-01-25 21:30:00',
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Putra Angga',
                'penjualan_kode' => 'PJN008',
                'penjualan_tanggal' => '2024-01-25 19:00:00',
                'created_at' => '2024-01-25 19:00:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Cinta Laura',
                'penjualan_kode' => 'PJN009',
                'penjualan_tanggal' => '2024-01-26 11:30:00',
                'created_at' => '2024-01-26 11:30:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Luna Maya',
                'penjualan_kode' => 'PJN010',
                'penjualan_tanggal' => '2024-01-02 12:45:00',
                'created_at' => '2024-01-02 12:40:00',
            ],
        ];

        DB::table('tt_penjualan')->insert($penjualanData);
    }
}