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
            'lastname' => 'Konoha',
            'email' => 'sanji@gmail.com',
            'password' => bcrypt('sanji123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'username' => 'kaprodi',
            'firstname' => 'Riski',
            'lastname' => 'Xyy',
            'email' => 'riski@gmail.com',
            'password' => bcrypt('riski123'),
            'role' => 'kaprodi',
        ]);

        DB::table('users')->insert([
            'username' => 'mahasiswa',
            'firstname' => 'Tegar',
            'lastname' => 'Gur',
            'email' => 'tegar@gmail.com',
            'password' => bcrypt('tegar123'),
            'role' => 'mahasiswa',
        ]);

        DB::table('kaprodi')->insert([
            'NIP' => '20038289723',
            'nama' => 'Tegar Firmansyah',
            'prodi' => 'Teknik Informatika',
            'id' => '2',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '20038289723',
            'nama' => 'Tegar Firmansyah',
            'prodi' => 'Teknik Informatika',
            'fakultas' => 'Informatika',
            'id_mapel' => '1',
            'jenis_kelamin' => 'Laki-Laki',
            'agama' => 'islam',
            'alamat' => 'Kota Bandung',
            'status_lulus' => 'lulus',
            'id' => '3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('mapels')->insert([
            'id_mapel' => '1',
            'nama_mapel' => 'Komputasi Berbasis Jaringan',
            'sks_mapel' => '2'
        ]);

        DB::table('krs')->insert([
            'id_krs' => '1',
            'sks' => '144',
            'ipk' => '3',
            'stambuk' => '31231',
            'NIM' => '20038289723',
        ]);
    }
}
