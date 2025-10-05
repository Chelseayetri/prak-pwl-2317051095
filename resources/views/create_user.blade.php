@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
          <h1 class="h5 mb-0">Buat Pengguna Baru</h1>
        </div>

        <div class="card-body">
          <form action="{{ route('user.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" required>
              <div class="invalid-feedback">Nama wajib diisi.</div>
            </div>

            <div class="mb-3">
              <label for="npm" class="form-label">NPM</label>
              <input type="text" id="npm" name="npm" class="form-control" required>
              <div class="invalid-feedback">NPM wajib diisi.</div>
            </div>

            <div class="mb-4">
              <label for="kelas_id" class="form-label">Kelas</label>
              <select id="kelas_id" name="kelas_id" class="form-select" required>
                @foreach ($kelas as $kelasItem)
                  <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">Silakan pilih kelas.</div>
            </div>

            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="/user" class="btn btn-outline-secondary">Kembali</a>
            </div>
          </form>
        </div>

        <div class="card-footer text-body-secondary small">
          Controller &amp; View · Modul 4
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Bootstrap form validation ringan --}}
<script>
(() => {
  'use strict';
  const forms = document.querySelectorAll('.needs-validation');
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) { event.preventDefault(); event.stopPropagation(); }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>
@endsection
