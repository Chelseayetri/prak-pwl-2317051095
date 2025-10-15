@extends('layouts.app')

@section('content')
<h1>Daftar Mata Kuliah</h1>

<p><a href="/matakuliah/create">+ Tambah Mata Kuliah</a></p>

<table border="1" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama MK</th>
            <th>SKS</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $mk)
            <tr>
                <td>{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Belum ada data.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
