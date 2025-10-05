@extends('layouts.app')

@section('content')
<div class="container py-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-0">{{ $title }}</h1>
    <a href="{{ route('user.create') }}" class="btn btn-success">+ Tambah User</a>
  </div>

  {{-- (opsional) search bar non-fungsional dulu --}}
  <form class="mb-3">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari nama / NPM (dummy)">
      <button class="btn btn-outline-secondary" type="button">Cari</button>
    </div>
  </form>

  <div class="card shadow-sm">
    <div class="card-body p-0">
      {{-- gunakan komponen tabel (poin 5) --}}
      <x-user-table :users="$users" />
    </div>
  </div>
</div>
@endsection
