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

    public function update($id_transaksis)
    {
        $data = array(
            'status_transaksi' => "selesai"
            );
        $this->db->set($data);
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi');
        return redirect('/billing');
    }
    
    public function pembayaran(Request $request){
        // $sks = DB::table('krs')->select('SKS')->get();
        // $lulus = DB::table('mahasiswa')->select('status_lulus')->get();
        // // dd($sks, $lulus);
        // if($sks >= '144'){
        //     alert()->success('Succes','Pembayaran Berhasil.');
        //     return redirect('/billing');
        // }else {
        // }

        DB::table('transaksi')->where('id_transaksi',$request->id_transaksi)->update([
            'status_transaksi' => $request->status_transaksi
        ]);
        return redirect('/billing');
    }


}
