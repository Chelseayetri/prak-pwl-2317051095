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
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        try {
            MataKuliah::create($request->only('nama_mk', 'sks'));
            return redirect('/matakuliah')->with('success', 'Data mata kuliah berhasil ditambahkan ✨');
        } catch (\Throwable $e) {
            return back()->with('error', 'Gagal menambahkan data.');
        }
    }

    public function edit($id)
    {
        $data = MataKuliah::findOrFail($id);
        return view('edit_mk', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        try {
            $data = MataKuliah::findOrFail($id);
            $data->update($request->only('nama_mk', 'sks'));
            return redirect('/matakuliah')->with('success', 'Data berhasil diupdate ✅');
        } catch (\Throwable $e) {
            return back()->with('error', 'Gagal mengupdate data.');
        }
    }

    public function destroy($id)
    {
        try {
            $data = MataKuliah::findOrFail($id);
            $data->delete();
            return redirect('/matakuliah')->with('success', 'Data berhasil dihapus 🗑️');
        } catch (\Throwable $e) {
            return back()->with('error', 'Gagal menghapus data.');
        }
    }
}
