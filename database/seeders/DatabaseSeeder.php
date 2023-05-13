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
            'email' => 'sanji@gmail.com',
            'password' => bcrypt('sanji123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'username' => 'kaprodi',
            'email' => 'riski@gmail.com',
            'password' => bcrypt('riski123'),
            'role' => 'kaprodi',
        ]);

        DB::table('users')->insert([
            'username' => 'dosen',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('dosen123'),
            'role' => 'dosen',
        ]);

        DB::table('users')->insert([
            'username' => 'mahasiswa',
            'email' => 'tegar@gmail.com',
            'password' => bcrypt('tegar123'),
            'role' => 'mahasiswa',
        ]);

        DB::table('kaprodi')->insert([
            'NIP' => '20038289723',
            'Nm_Kaprodi' => 'Tegar Firmansyah',
            'Prodi' => 'Teknik Informatika',
            'Fakultas' => 'Informatika',
            'id' => '2',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('dosen')->insert([
            'NIDN' => '21038289723',
            'Nm_Dosen' => 'Jaelani Muharam',
            'Prodi' => 'Teknik Informatika',
            'id' => '3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

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
            'status_lulus' => 'lulus',
            'id' => '4',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('krs')->insert([
            'id_krs' => '1',
            'SKS' => '144',
            'KD_Penasehat' => '1',
            'IPKSebelumnya' => '2',
            'RencanaSKS' => '8 SKS',
            'NIM' => '20038289723',
        ]);
    }
}
