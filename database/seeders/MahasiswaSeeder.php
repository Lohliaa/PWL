<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'Nim' => '2041720214',
            'Nama' => 'Lia Puspita Dewi',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknologi Informasi',
            'No_handphone' => '085856145307',
            'Email' => 'LiaAufarrahman09@gmail.com',
            'Tanggal_Lahir' => '2001/09/13'
        ]);
    }
}
