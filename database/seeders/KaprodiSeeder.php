<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Akun dengan role
        DB::table('kaprodi')->insert([
            'NIP' => '20038289723',
            'Nm_Kaprodi' => 'Tegar Firmansyah',
            'Prodi' => 'Teknik Informatika',
            'Fakultas' => 'Informatika',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
