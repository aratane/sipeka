<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('mahasiswa')->insert([
            'NIM' => '20038289723',
            'Nm_Mahasiswa' => 'Tegar Firmansyah',
            'Prodi' => 'Teknik Informatika',
            'Fakultas' => 'Informatika',
            'JK' => 'Laki-Laki',
            'Agama' => 'islam',
            'Alamat' => 'Kota Bandung',
            'IPK' => '3',
            'Stambuk' => '20203',
            'No_Tlp' => '09312390',
            'Bio' => 'Tidur',
            'NIDN' => '21038289723',
            'status_lulus' => 'lulus',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '2002828972',
            'Nm_Mahasiswa' => 'Hilman Syaputra',
            'Prodi' => 'Teknik Elektro',
            'Fakultas' => 'Elektronika',
            'JK' => 'Laki-Laki',
            'Agama' => 'islam',
            'Alamat' => 'Kota Bandung',
            'IPK' => '3',
            'Stambuk' => '20303',
            'No_Tlp' => '23109213',
            'Bio' => 'Apa Aja',
            'NIDN' => '21038289724',
            'status_lulus' => 'lulus',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
