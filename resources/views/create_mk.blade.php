@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">Tambah Mata Kuliah</div>
    <div class="card-body">

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

      <form method="POST" action="{{ route('matakuliah.store') }}" class="form-mk">
        @csrf

        <div class="form-group">
          <label for="nama_mk">Nama Mata Kuliah</label>
          <input type="text" id="nama_mk" name="nama_mk" placeholder="Masukkan nama mata kuliah" required>
        </div>

        <div class="form-group">
          <label for="sks">Jumlah SKS</label>
          <input type="number" id="sks" name="sks" min="1" max="6" placeholder="Masukkan jumlah SKS" required>
        </div>

        <div class="button-group">
          <button type="submit" class="btn btn-primary">➕ Simpan Data</button>
          <a href="/matakuliah" class="btn btn-ghost">← Kembali</a>
        </div>
      </form>

    </div>
  </div>
</div>

{{-- 💅 STYLE --}}
<style>
  body {
    background: #f9fafb;
    font-family: 'Poppins', sans-serif;
    color: #1f2937;
  }

  .container {
    max-width: 700px;
    margin: 40px auto;
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.6s ease;
  }

  .card-header {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1e3a8a;
    margin-bottom: 25px;
    text-align: center;
    background: linear-gradient(90deg, #6366f1, #06b6d4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .form-group {
    margin-bottom: 18px;
  }

  label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: #1e3a8a;
  }

  input {
    width: 100%;
    padding: 10px 12px;
    border-radius: 12px;
    border: 1px solid #cbd5e1;
    background: #f8fafc;
    font-size: 15px;
    transition: all 0.2s ease;
  }

  input:focus {
    border-color: #6366f1;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(99,102,241,0.2);
    outline: none;
  }

  .button-group {
    display: flex;
    gap: 10px;
    justify-content: flex-start;
    margin-top: 20px;
  }

  .btn {
    border: none;
    padding: 10px 16px;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.25s ease;
  }

  .btn-primary {
    background: linear-gradient(90deg, #38bdf8, #3b82f6);
    color: white;
  }

  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(59,130,246,0.3);
  }

  .btn-ghost {
    background: #e2e8f0;
    color: #1e3a8a;
  }

  .btn-ghost:hover {
    background: #cbd5e1;
  }

  .alert {
    padding: 12px;
    border-radius: 10px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .alert-success {
    background: #dcfce7;
    color: #166534;
    border-left: 5px solid #22c55e;
  }

  .alert-error {
    background: #fee2e2;
    color: #b91c1c;
    border-left: 5px solid #ef4444;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>

<script>
  setTimeout(() => {
    document.querySelectorAll('.alert').forEach(el => el.style.display='none');
  }, 3000);
</script>
@endsection
