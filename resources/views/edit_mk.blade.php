@extends('layouts.app')

@section('content')
<h1>Edit Mata Kuliah</h1>

@if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if (session('error'))
  <div class="alert alert-error">{{ session('error') }}</div>
@endif
@if ($errors->any())
  <div class="alert alert-error">
    <ul style="margin:0;padding-left:18px;">
      @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('matakuliah.update', $data->id) }}">
  @csrf
  @method('PUT')

  <div>
    <label>Nama MK</label><br>
    <input type="text" name="nama_mk" value="{{ old('nama_mk',$data->nama_mk) }}" required>
  </div>

  <div style="margin-top:8px;">
    <label>SKS</label><br>
    <input type="number" name="sks" value="{{ old('sks',$data->sks) }}" min="1" max="6" required>
  </div>

  <div style="margin-top:12px; display:flex; gap:8px;">
    <button class="btn btn-edit" type="submit">💾 Update</button>
    <a class="btn btn-primary" href="/matakuliah">← Kembali</a>
  </div>
</form>

<style>
  .btn { display:inline-block; padding:8px 12px; border-radius:10px; font-weight:600; border:none; cursor:pointer; text-decoration:none; transition: transform .08s ease, box-shadow .2s ease; box-shadow: 0 2px 6px rgba(0,0,0,.08);}
  .btn:active { transform: translateY(1px); }
  .btn-primary { background:linear-gradient(135deg,#4f46e5,#06b6d4); color:#fff; }
  .btn-edit    { background:linear-gradient(135deg,#22c55e,#16a34a); color:#fff; }
  .alert { padding:10px 12px; border-radius:10px; margin:10px 0; font-weight:600; }
  .alert-success { background:#ecfeff; color:#0e7490; border:1px solid #a5f3fc; }
  .alert-error   { background:#fef2f2; color:#b91c1c; border:1px solid #fecaca; }
</style>

<script>
  setTimeout(() => {
    document.querySelectorAll('.alert').forEach(el => el.style.display='none');
  }, 2800);
</script>
@endsection
