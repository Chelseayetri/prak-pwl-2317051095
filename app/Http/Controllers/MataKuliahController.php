<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;   
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = (new MataKuliah())->getAllMK();
        return view('list_mk', compact('data'));
    }

    public function create()
    {
        return view('create_mk');
    }

    public function store(Request $request)
    {
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks'     => $request->input('sks'),
        ]);

        return redirect('/matakuliah');
    }
}
