<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')
            ->join('users', 'mahasiswa.NIM', '=', 'users.NIM')
            ->join('dosen', 'mahasiswa.NIDN', '=', 'dosen.NIDN')
            ->where('mahasiswa.NIM', '=', auth()->user()->NIM)
            ->get();

        $file = File::get();
        return view('pages.dashboard', ['file' => $file], compact('mahasiswa'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'Nm_Mahasiswa' => 'required',
            'Nm_Dosen' => 'required',
            'NIDN' => 'required',
            'NIM' => 'required',
            'status' => 'required',
        ]);

        $fileName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('suratmh'), $fileName);

        File::create([
            'Nm_Mahasiswa' => $request->Nm_Mahasiswa,
            'Nm_Dosen' => $request->Nm_Dosen,
            'file' => $fileName,
            'NIDN' => $request->NIDN,
            'NIM' => $request->NIM,
            'status' => $request->status,
        ]);

        return back()
            ->with('succes', 'File Berhasil di Upload.')
            ->with('file', $fileName);
    }
}
