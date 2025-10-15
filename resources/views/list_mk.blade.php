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
            <th>Aksi</th> 
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $mk)
            <tr>
                <td>{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>

                <td>
                    <a href="/matakuliah/{{ $mk->id }}/edit">Edit</a>

                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
