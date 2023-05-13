<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillingController extends Controller
{
    public function index()
    {
        return view('pages.billing');
    }
    public function pembayaran(){
        $sks = DB::table('krs')->select('SKS')->get();
        dd($sks);
    }
}
