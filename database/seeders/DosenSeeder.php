<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'NIDN' => '21038289723',
            'Nm_Dosen' => 'Jaelani Muharam',
            'Prodi' => 'Teknik Informatika',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('dosen')->insert([
            'NIDN' => '21038289724',
            'Nm_Dosen' => 'Sandika Muharam',
            'Prodi' => 'Teknik Informatika',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('dosen')->insert([
            'NIDN' => '21038289725',
            'Nm_Dosen' => 'Agus Muharam',
            'Prodi' => 'Teknik Informatika',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('dosen')->insert([
            'NIDN' => '21038289726',
            'Nm_Dosen' => 'Mulyana Muharam',
            'Prodi' => 'Teknik Informatika',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('dosen')->insert([
            'NIDN' => '21038289727',
            'Nm_Dosen' => 'Doni Muharam',
            'Prodi' => 'Teknik Informatika',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
