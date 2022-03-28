<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Barang')->insert([
            [
            'brand' => 'Lenovo',
            'jenis' => 'Laptop Gaming',
            'gambar' => 'legion5.jpg',
            'spesifikasi' => 'LEGION 5 : AMD Ryzen 5 4800H, NVIDIA GeForce GTX 1650Ti 4GB,15,6" FHD IPS (1920 x 1080), 300 nits, 144 Hz, respond time 3 ms, 100% sRGB, VESA DisplayHDR 400 certified, Dolby Vision™ enabled, RAM 8GB 3200Hz DDR4,ROM 512GB SSD M.2 2280 NVME TLC'
            ],
            [
                'brand' => 'Apple',
                'jenis' => 'Laptop Editing',
                'gambar' => 'macbookpro13.png',
                'spesifikasi' => 'MACBOOK13 : Apple M1 chip, Retina display, 13.3-inch (diagonal) LED-backlit display with IPS technology; 2560-by-1600 native resolution at 227 pixels per inch with support for millions of colors,4k Resolution, 500 nits brightness, Wide color (P3), True Tone technology, RAM 8GB, ROM 256GB, Stereo speakers with high dynamic range'
                ],
                [
                    'brand' => 'ASUS',
                    'jenis' => 'Laptop Gaming',
                    'gambar' => 'asusrogg5.jpg',
                    'spesifikasi' => 'ROG G5 : Intel i5-10300H, NVIDIA GeForce GTX 1650Ti 4GB, RAM 8GB 3200Hz DDR4, ROM 512GB '
                ],
                [
                    'brand' => 'ACER',
                    'jenis' => 'Laptop Gaming',
                    'gambar' => 'nitro5.png',
                    'spesifikasi' => 'NITRO 5 : Intel i5-8300H, NVIDIA GeForce GTX 1050Ti 4GB, RAM 8GB, ROM 1TB, IPS 144hz'
                ],
                [
                    'brand' => 'ASUS',
                    'jenis' => 'Laptop Gaming',
                    'gambar' => 'asustufa15.jpg',
                    'spesifikasi' => 'TUF A15 : AMD Ryzen™ 5 4600H, NVIDIA® GeForce® GTX 1650 Ti, 4GB GDDR6,15.6-inch, FHD (1920 x 1080) 16:9, anti-glare display, sRGB:100%, Adobe:73.35%, Refresh Rate:144Hz, IPS-level, Optimus,RAM 8GB, ROM 512GB SSD, Audio DTS software.'
                ],
                [
                    'brand' => 'Apple',
                    'jenis' => 'Laptop Editing',
                    'gambar' => 'macpromd104.jpg',
                    'spesifikasi' => 'Macbook Pro MD104 : Quad-core Ivy Bridge processor, Switchable Nvidia graphics technology,Design alumunium silver, Port USB 3.0, Firewire, Thunderbolt, GPU GeForce GT 650M ( 1 GB )'
                ],
                [
                    'brand' => 'MSI',
                    'jenis' => 'Laptop Gaming',
                    'gambar' => 'msig5.png',
                    'spesifikasi' => 'MSI STEALTH : Intel® Core™ i9 12th, GeForce RTX™ 3080 Ti GPU 16GB GDDR6,Panel 17.3“ UHD (3840x2160), 120 Hz Refresh Rate,100% DCI-P3, IPS-Level, Audio 6x Dynaudio,RGB keyboard by SteelSeries'
                ] 
        ]);
    }
}
