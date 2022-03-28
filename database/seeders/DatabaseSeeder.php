<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([MahasiswaSeeder::class]);
        
        $this->call([HomeSeeder::class]);
        $this->call([SuplierSeeder::class]);
        $this->call([PelangganSeeder::class]);
        // --------------------------------------//
        $this->call([BarangSeeder::class]);
        $this->call([PegawaiSeeder::class]);

        // \App\Models\User::factory(10)->create();
    }
}
