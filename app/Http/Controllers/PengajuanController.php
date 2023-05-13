<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{
    public function pengajuan()
    {
    	$krs = DB::table('krs')
        ->join('mahasiswa', 'mahasiswa.NIM', '=', 'krs.NIM')
        ->get();
        // dd($krs);
        return view('pages.pengajuan-pk')->with('krs',$krs);
    }
}
