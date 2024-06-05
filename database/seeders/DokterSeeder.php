<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr. Ahmad Zaki',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1980-01-15',
                'kategori' => 'Umum',
                'telpon' => '081234567890',
                'alamat' => 'Jl. Sudirman No. 10, Jakarta',
                'unit_kerja_id' => '1',
            ],
            [
                'nama' => 'Dr. Siti Aminah',
                'gender' => 'P',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1985-03-22',
                'kategori' => 'Anak',
                'telpon' => '082345678901',
                'alamat' => 'Jl. Diponegoro No. 15, Surabaya',
                'unit_kerja_id' => '2',
            ],
            [
                'nama' => 'Dr. Budi Santoso',
                'gender' => 'L',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1978-07-30',
                'kategori' => 'Bedah',
                'telpon' => '083456789012',
                'alamat' => 'Jl. Asia Afrika No. 20, Bandung',
                'unit_kerja_id' => '3',
            ],
            [
                'nama' => 'Dr. Rina Mustika	',
                'gender' => 'P',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1990-12-11',
                'kategori' => 'Kandungan',
                'telpon' => '084567890123',
                'alamat' => 'Jl. Gatot Subroto No. 25, Medan',
                'unit_kerja_id' => '4',
            ],
            [
                'nama' => 'Dr. Rudi Hartono',
                'gender' => 'L',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1975-05-18',
                'kategori' => 'Gigi',
                'telpon' => '085678901234',
                'alamat' => 'Jl. Malioboro No. 30, Yogyakarta',
                'unit_kerja_id' => '5',
            ],
        ]);
    }
}
