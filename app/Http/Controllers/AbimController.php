<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbimController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute wajib diisi minimal :min karakter',
            'max' => ':attribute wajib diisi minimal :max karakter',
        ];

        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ], $messages);
        return view('proses', ['data' => $request]);
    }
}
