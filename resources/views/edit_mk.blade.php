@extends('layouts.app')

@section('content')
<h1>Edit Mata Kuliah</h1>

<form method="POST" action="{{ route('matakuliah.update', $data->id) }}">
  @csrf
  @method('PUT')

  <div>
    <label>Nama MK</label><br>
    <input type="text" name="nama_mk" value="{{ $data->nama_mk }}" required>
  </div>

  <div style="margin-top:8px;">
    <label>SKS</label><br>
    <input type="number" name="sks" value="{{ $data->sks }}" min="1" max="6" required>
  </div>

  <div style="margin-top:12px;">
    <button type="submit">Update</button>
    <a href="/matakuliah" style="margin-left:8px;">Batal</a>
  </div>
</form>
@endsection
