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
            ->join('users', 'mahasiswa.id', '=', 'users.id')
            ->where('mahasiswa.id', '=', auth()->user()->id)
            ->get();
        //dd($mahasiswa);
        return view('pages.krstudi', compact('mahasiswa'));
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
            'KD_Penasehat' => 'required',
            'Nm_Penasehat' => 'required',
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
            'KD_Penasehat' => $request->KD_Penasehat,
            'Nm_Penasehat' => $request->Nm_Penasehat,
            'IPKSebelumnya' => $request->IPKSebelumnya,
            'RencanaSKS' => $request->RencanaSKS,
            'Nm_Mahasiswa' => $request->Nm_Penasehat,
            'JK' => $request->JK,
            'Agama' => $request->Agama,
            'Alamat' => $request->Alamat,
            'NIM' => $request->NIM,
        ]);

        return redirect()->route('pages.krstudi')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
