<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class BillingController extends Controller
{
    public function index()
    {
        $transaksi = DB::table('transaksi')
        ->get();
        // dd($transaksi);
        return view('pages.billing',compact('transaksi'));
    }

    public function update(Request $id_transaksi)
    { 
        DB::table('transaksi')->where('id_transaksi',$id_transaksi->id_transaksi)->update([
            'status_transaksi' => "sukses"
        ]);
        alert()->success('Success','Pembayaran Berhasil');
        return redirect('/billing');
    }
    
}