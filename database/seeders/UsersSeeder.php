<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat Akun
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'sanji@gmail.com',
            'password' => bcrypt('sanji123'),
            'role' => 'admin',
        ]);

        // Akun Kaprodi
        DB::table('users')->insert([
            'username' => 'kaprodi',
            'email' => 'tegur@gmail.com',
            'password' => bcrypt('tegur123'),
            'NIP' => '20038289723',
            'role' => 'kaprodi',
        ]);

        // Akun Dosen
        DB::table('users')->insert([
            'username' => 'jealani',
            'email' => 'jealani@gmail.com',
            'password' => bcrypt('jealani123'),
            'NIDN' => '21038289723',
            'role' => 'dosen',
        ]);

        DB::table('users')->insert([
            'username' => 'sandika',
            'email' => 'sandika@gmail.com',
            'password' => bcrypt('sandika123'),
            'NIDN' => '21038289724',
            'role' => 'dosen',
        ]);

        DB::table('users')->insert([
            'username' => 'agus',
            'email' => 'agus@gmail.com',
            'password' => bcrypt('agus123'),
            'NIDN' => '21038289725',
            'role' => 'dosen',
        ]);

        DB::table('users')->insert([
            'username' => 'mulyana',
            'email' => 'mulyana@gmail.com',
            'password' => bcrypt('mulyana123'),
            'NIDN' => '21038289726',
            'role' => 'dosen',
        ]);

        DB::table('users')->insert([
            'username' => 'doni',
            'email' => 'doni@gmail.com',
            'password' => bcrypt('doni123'),
            'NIDN' => '21038289727',
            'role' => 'dosen',
        ]);

        // Akun Mahasiswa
        DB::table('users')->insert([
            'username' => 'mahasiswa',
            'email' => 'tegar@gmail.com',
            'password' => bcrypt('tegar123'),
            'NIM' => '20038289723',
            'role' => 'mahasiswa',
        ]);

        DB::table('users')->insert([
            'username' => 'hilman',
            'email' => 'hilman@gmail.com',
            'password' => bcrypt('hilman123'),
            'NIM' => '2002828972',
            'role' => 'mahasiswa',
        ]);
    }
}
