<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            'id_transaksi' => '31213',
            'NIM' => '20038289723',
            'Metode_Bayar' => 'BCA',
            'Tanggal_Bayar' => '20-11-23',
            'Status_Transaksi' => 'belum_bayar',
        ]);

        DB::table('transaksi')->insert([
            'id_transaksi' => '31214',
            'NIM' => '20038289723',
            'Metode_Bayar' => 'BCA',
            'Tanggal_Bayar' => '21-12-23',
            'Status_Transaksi' => 'belum_bayar',
        ]);
    }
}
