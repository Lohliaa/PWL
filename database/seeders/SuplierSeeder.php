<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Suplier;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Suplier')->insert([
            [
            'nama' => 'PT. Trikomindo Kharis Utama ',
            'jenis' => 'MacBook Air (Retina, 13.3 inci, 2020) 1.1 GHZ, 8 GB RAM, 512 GB SSD',
            'gambar' => 'laptop.jpg',
            'alamat' => 'Ruko Permata Ancol Blok G no 16, Jakarta Utara, DKI Jakarta, Indonesia'
            ],
            [
                'nama' => 'PT. Bismacindo Perkasa',
                'jenis' => 'MacBook Pro (13.3inci, 2020, Empat Thunderbolt 3) 2.0 GHZ, 16 GB RAM, 1 TB SSD',
                'gambar' => 'laptop.jpg',
                'alamat' => 'Jl Raya Pesangrahan N0 1128 B Jakarta Barat 11610, Jakarta Barat, DKI Jakarta, Indonesia'
                ],
                [
                    'nama' => 'PT Inovasi Sukses Sentosa',
                    'jenis' => 'MacBook Pro M1 (2020)',
                    'gambar' => 'laptop.jpg',
                    'alamat' => 'Ruko Business Park Blok E2 No 8, Jl Meruya Ilir Raya No.88 Kebon Jeruk Jakarta Barat, Jakarta Barat, DKI Jakarta, Indonesia'
                ],
                    [
                        'nama' => 'PT Inti Jaya Mandiri',
                        'jenis' => 'MacBook Pro M1 (2020)',
                        'gambar' => 'laptop.jpg',
                        'alamat' => 'komplek PCI blok E.34 No.6, cibeber, kota cilegon 42423, Kota Cilegon, Banten, Indonesia'
                    ],
                        [
                            'nama' => 'PT Mulia Perkasa Solusindo',                    
                            'jenis' => 'MacBook Pro 2019 16" Touch Bar I9 2.3 GHZ 1 TB',
                            'gambar' => 'laptop.jpg',
                            'alamat' => 'Ruko Business Park Blok E2 No 8, Jl Meruya Ilir Raya No.88 Kebon Jeruk Jakarta Barat, Jakarta Barat, DKI Jakarta, Indonesia'
                        ]
        ]);
    }
}
