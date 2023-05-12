<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Ihsan',
            'lastname' => 'Maulana',
            'email' => 'sanji@aratadev.my.id',
            'password' => bcrypt('sanji123')
        ]);

        DB::table('level')->insert([
            'id_level' => '2',
            'role' => 'mahasiswa',
        ]);

        DB::table('akun')->insert([
            'id_akun' => '1',
            'username' => 'Tegar',
            'password' => 'tegar123',
            'id_level' => '2',
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '20038289723',
            'nama' => 'Tegar Firmansyah',
            'prodi' => 'Teknik Informatika',
            'fakultas' => 'Informatika',
            'alamat' => 'Kota Bandung',
            'status_lulus' => 'lulus',
            'id_akun' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),

        ]);
    }
}
