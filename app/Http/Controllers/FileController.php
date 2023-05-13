<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');
        // $file->storeAs('public', 'suratmahasiswa' . uniqid() . '.' . $file->extension());

        $path = $file->storeAs('filemahasiswa', uniqid() . '.' . $file->extension(), ['disk' => 'public']);
    }
}
