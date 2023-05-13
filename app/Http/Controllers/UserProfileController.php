<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function show()
    {
        $mahasiswa = DB::table('mahasiswa')
            ->join('users', 'mahasiswa.NIM', '=', 'users.NIM')
            ->where('mahasiswa.NIM', '=', auth()->user()->NIM)
            ->get();
        // dd($mahasiswa);
        return view('pages.user-profile', compact('mahasiswa'));
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'max:255', 'min:2'],
            'firstname' => ['max:100'],
            'lastname' => ['max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'address' => ['max:100'],
            'city' => ['max:100'],
            'country' => ['max:100'],
            'postal' => ['max:100'],
            'about' => ['max:255']
        ]);

        auth()->user()->update([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
        ]);

        DB::table('mahasiswa')
            ->join('users', 'mahasiswa.id', '=', 'users.id')
            ->where('mahasiswa.id', '=', auth()->user()->id)
            ->update([
                'Nm_Mahasiswa' => $request->get('Nm_Mahasiswa'),
                'JK' => $request->get('JK'),
                'Fakultas' => $request->get('Fakultas'),
                'Prodi' => $request->get('Prodi'),
                'Agama' => $request->get('Agama'),
                'Alamat' => $request->get('Alamat'),
                'No_Tlp' => $request->get('No_Tlp'),
                'Bio' => $request->get('Bio')
            ]);
        //BARU BISA UPDATE USERNAME SAMA EMAIL   
        return back()->with('succes', 'Profile succesfully updated');
    }
}
