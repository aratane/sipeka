<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            // Mahasiswa Data
            $mahasiswa = DB::table('mahasiswa')
                ->join('users', 'mahasiswa.NIM', '=', 'users.NIM')
                ->join('dosen', 'mahasiswa.NIDN', '=', 'dosen.NIDN')
                ->where('mahasiswa.NIM', '=', auth()->user()->NIM)
                ->get();
            // dd($mahasiswa);

            // Histori KRS
            $hiskrs = DB::table('krs')
                ->join('mahasiswa', 'krs.NIDN', '=', 'mahasiswa.NIDN')
                ->where('mahasiswa.NIM', '=', auth()->user()->NIM)
                ->get();

            // Pengajuan KRS
            $pengajuan = DB::table('krs')
                ->join('dosen', 'krs.NIDN', '=', 'dosen.NIDN')
                ->where('dosen.NIDN', '=', auth()->user()->NIDN)
                ->get();

            return view("pages.{$page}", compact('pengajuan', 'mahasiswa', 'hiskrs'));
        }

        return abort(404);
    }

    public function profile()
    {
        return view("pages.profile-static");
    }

    public function signin()
    {
        return view("pages.sign-in-static");
    }

    public function signup()
    {
        return view("pages.sign-up-static");
    }
}
