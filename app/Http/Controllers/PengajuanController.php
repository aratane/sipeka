<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')
            ->join('users', 'mahasiswa.NIM', '=', 'users.NIM')
            ->join('dosen', 'mahasiswa.NIDN', '=', 'dosen.NIDN')
            ->where('mahasiswa.NIM', '=', auth()->user()->NIM)
            ->get();
        //dd($mahasiswa);

        // Histori KRS
        $hiskrs = DB::table('krs')
            ->join('mahasiswa', 'krs.NIDN', '=', 'mahasiswa.NIDN')
            ->where('mahasiswa.NIM', '=', auth()->user()->NIM)
            ->get();

        return view('pages.krstudi', compact('mahasiswa', 'hiskrs'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'IPK'     => 'required',
            'SKS'   => 'required',
            'Stambuk'   => 'required',
            'Prodi'   => 'required',
            'Fakultas' => 'required',
            'NIDN' => 'required',
            'Nm_Dosen' => 'required',
            'IPKSebelumnya' => 'required',
            'RencanaSKS' => 'required',
            'Nm_Mahasiswa' => 'required',
            'JK' => 'required',
            'Agama' => 'required',
            'Alamat' => 'required',
            'NIM' => 'required',
        ]);

        //create post
        KRS::create([
            'IPK'     => $request->IPK,
            'SKS'   => $request->SKS,
            'Stambuk'   => $request->Stambuk,
            'Prodi'   => $request->Prodi,
            'Fakultas' => $request->Fakultas,
            'NIDN' => $request->NIDN,
            'Nm_Dosen' => $request->Nm_Dosen,
            'IPKSebelumnya' => $request->IPKSebelumnya,
            'RencanaSKS' => $request->RencanaSKS,
            'Nm_Mahasiswa' => $request->Nm_Mahasiswa,
            'JK' => $request->JK,
            'Agama' => $request->Agama,
            'Alamat' => $request->Alamat,
            'NIM' => $request->NIM
        ]);

        return redirect()->route('pengajuan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
