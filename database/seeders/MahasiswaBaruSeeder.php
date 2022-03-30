<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [
            'Nim' => '2041720219',
            'Nama' => 'Rossa Akmalia',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknologi Informasi',
            'No_handphone' => '089505451634',
            'Email' => 'RossaAkmalia@gmail.com',
            'Tanggal_Lahir' => '2002/10/01'
            ],
                [
                'Nim' => '2041720023',
                'Nama' => 'Della Jannata F',
                'Kelas' => 'TI-2E',
                'Jurusan' => 'Teknologi Informasi',
                'No_handphone' => '085816374705',
                'Email' => 'DellaJannata@gmail.com',
                'Tanggal_Lahir' => '2001/12/22'
                ],
                    [
                    'Nim' => '2041720064',
                    'Nama' => 'Bella Sonia Dwi A',
                    'Kelas' => 'TI-2E',
                    'Jurusan' => 'Teknologi Informasi',
                    'No_handphone' => '081358475378',
                    'Email' => 'BellaSonia@gmail.com',
                    'Tanggal_Lahir' => '2002/02/25'
                    ],
                        [
                        'Nim' => '2041720045',
                        'Nama' => 'Anjani Dwilestari',
                        'Kelas' => 'TI-2E',
                        'Jurusan' => 'Teknologi Informasi',
                        'No_handphone' => '085231404775',
                        'Email' => 'AnjaniDwiLestari@gmail.com',
                        'Tanggal_Lahir' => '2002/06/12'
                        ],
                        [
                            'Nim' => '2041720012',
                            'Nama' => 'Deatrisya Mirela Harahap',
                            'Kelas' => 'TI-2E',
                            'Jurusan' => 'Teknologi Informasi',
                            'No_handphone' => '085292739192',
                            'Email' => 'DeatrisyaMireal@gmail.com',
                            'Tanggal_Lahir' => '2002/03/02'
                            ],
                            [
                                'Nim' => '2041720020',
                                'Nama' => 'Siti Aisyah',
                                'Kelas' => 'TI-2E',
                                'Jurusan' => 'Teknologi Informasi',
                                'No_handphone' => '081928920921',
                                'Email' => 'SitiAisyah@gmail.com',
                                'Tanggal_Lahir' => '2002/03/09'
                                ],
                                [
                                    'Nim' => '2041720123',
                                    'Nama' => 'Irma Maulidia',
                                    'Kelas' => 'TI-2E',
                                    'Jurusan' => 'Teknologi Informasi',
                                    'No_handphone' => '082938972398',
                                    'Email' => 'IrmaMaulidia@gmail.com',
                                    'Tanggal_Lahir' => '2002/01/10'
                                ]
                            ]);
    }
}
