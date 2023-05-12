<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $users = User::get();

        $data = [
            'title' => 'Surat Pengantar',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('suratpengantar', $data);

        return $pdf->download('suratpengantar.pdf');
    }

    public function generateSK()
    {
        $users = User::get();

        $data = [
            'title' => 'Surat Pengantar SK',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('suratsk', $data);

        return $pdf->download('suratsk.pdf');
    }

    public function generateKRS()
    {
        $users = User::get();

        $data = [
            'title' => 'Kartu Rencana Studi',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('suratkrs', $data);

        return $pdf->download('suratkrs.pdf');
    }
}
