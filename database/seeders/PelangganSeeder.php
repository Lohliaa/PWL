<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pelanggan')->insert([
            [
            'nama_pembeli' => 'Rossa Akmali',
            'jenis_kelamin' => 'wanita',
            'nama' => 'PT. Trikomindo Kharis Utama ',
            'gambar' => 'trikom-kharisma.png',
            'alamat' => 'Ruko Permata Ancol Blok G no 16, Jakarta Utara, DKI Jakarta, Indonesia',
            'telepon' => '(+62)2122644744'
            ],
            [
                'nama_pembeli' => 'Deatrisya Mirela',
                'jenis_kelamin' => 'wanita',
                'nama' => 'PT Alia Teknik',
                'gambar' => 'aliateknik.jpg',
                'alamat' => 'Melati Mas Blok I/10 No. 18 , Jelupang, Serpong Utara Tangerang, Banten, Kota Tangerang Selatan, Banten, Indonesia',
                'telepon' => '(+62)81811872755'    
            ],
            [
                    'nama_pembeli' => 'Lazuardi Timur',
                    'jenis_kelamin' => 'pria',
                    'nama' => 'PT Quartee Technologies',
                    'gambar' => 'QT.jpg',
                    'alamat' => 'Kompleks Taman Semanan Indah, Plaza Delumina, Blok B, No.18, Jakarta Barat, DKI Jakarta, Indonesia',
                    'telepon' => '(+62)21999820023'
            ],
            [
                'nama_pembeli' => 'Mahbub Auliaur',
                'jenis_kelamin' => 'pria',
                'nama' => 'CV Kreasi Teknologi Nusantara',
                'gambar' => 'kreasi.png',
                'alamat' => 'Jalan Apel Raya Blok Perumnas No. 52, Kel. Sukamelang, Kec. Subang, Kab. Subang, Subang, Jawa Barat, Indonesia',
                'telepon' => '(+62)81999012212'
            ],
        [
            'nama_pembeli' => 'Mahisa Aghisni',
            'jenis_kelamin' => 'pria',
            'nama' => 'CV Energi Digital Teknologi',
            'gambar' => 'energi.png',
            'alamat' => 'Graha Mampang LT.3 Suite 305, Jakarta Selatan, DKI Jakarta, Indonesia',
            'telepon' => '(+62)21001265655'
    ]
        ]);
    }
}
