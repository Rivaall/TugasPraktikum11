<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2024-01-10',
                'berat' => '70',
                'tinggi' => '170',
                'tensi' => '120/80',
                'keterangan' => 'Kondisi stabil',
                'pasien_id' => '1',
                'dokter_id' => '1',
            ],
            [
                'tanggal' => '2024-01-12',
                'berat' => '60',
                'tinggi' => '160',
                'tensi' => '130/85',
                'keterangan' => 'Perlu diet',
                'pasien_id' => '2',
                'dokter_id' => '2',
            ],
            [
                'tanggal' => '2024-01-15',
                'berat' => '80',
                'tinggi' => '180',
                'tensi' => '140/90',
                'keterangan' => 'Pemeriksaan lanjutan',
                'pasien_id' => '3',
                'dokter_id' => '3',
            ],
            [
                'tanggal' => '2024-01-18',
                'berat' => '55',
                'tinggi' => '155',
                'tensi' => '110/70	',
                'keterangan' => 'Kondisi baik',
                'pasien_id' => '4',
                'dokter_id' => '4',
            ],
            [
                'tanggal' => '2024-01-20',
                'berat' => '75',
                'tinggi' => '175',
                'tensi' => '135/85',
                'keterangan' => 'Tekanan darah tinggi',
                'pasien_id' => '5',
                'dokter_id' => '5',
            ],
        ]);
    }
}
