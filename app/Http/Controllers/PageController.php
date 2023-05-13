<?php

namespace App\Http\Controllers;

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
                ->join('users', 'mahasiswa.id', '=', 'users.id')
                ->where('mahasiswa.id', '=', auth()->user()->id)
                ->get();

            // Data Pengajuan VPPK
            $pengajuan = DB::table('mahasiswa')
                ->join('krs', 'mahasiswa.NIM', '=', 'krs.NIM')
                ->where('mahasiswa.NIM', '=', 'krs.NIM')
                ->get();
            // dd($pengajuan);
            return view("pages.{$page}", compact('pengajuan', 'mahasiswa'));
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
