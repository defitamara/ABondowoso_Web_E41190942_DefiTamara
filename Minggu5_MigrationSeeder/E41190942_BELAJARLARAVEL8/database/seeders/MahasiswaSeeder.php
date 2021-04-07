<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke tabel mahasiswa
        DB::table('mahasiswa')->insert([
            'nama' => 'Defi Tamara',
            'prodi' => 'Teknik Informatika',
            'tanggal_lahir' => '2001-10-26',
            'alamat' => 'Bondowoso, Jawa Timur'
        ]);
    }
}

