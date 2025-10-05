@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="m-0">Daftar Pengguna</h1>
    <a href="{{ route('user.create') }}" class="btn btn-success">+ Tambah User</a>
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->nama }}</td>
          <td>{{ $user->nim }}</td>
          <td>{{ $user->nama_kelas }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
