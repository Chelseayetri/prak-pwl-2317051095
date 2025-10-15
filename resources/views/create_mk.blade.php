@extends('layouts.app')

@section('content')
<h1>Form Mata Kuliah</h1>

<form method="POST" action="{{ route('matakuliah.store') }}">
    @csrf
    <div>
        <label>Nama MK</label><br>
        <input type="text" name="nama_mk" required>
    </div>

    <div style="margin-top:8px;">
        <label>SKS</label><br>
        <input type="number" name="sks" min="1" max="6" required>
    </div>

    <div style="margin-top:12px;">
        <button type="submit">Simpan</button>
    </div>
</form>

<p style="margin-top:12px;">
    <a href="/matakuliah">Lihat daftar Mata Kuliah</a>
</p>
@endsection
