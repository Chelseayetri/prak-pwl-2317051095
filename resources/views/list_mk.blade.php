@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Daftar Mata Kuliah</h1>

  {{-- 🔔 ALERT --}}
  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  @if (session('error'))
    <div class="alert alert-error">{{ session('error') }}</div>
  @endif

  <p><a class="btn btn-add" href="/matakuliah/create">+ Tambah Mata Kuliah</a></p>

  <table class="table">
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
          <td class="actions">
            <a href="/matakuliah/{{ $mk->id }}/edit" class="btn btn-edit">✏️ Edit</a>

            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-delete"
                onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="4">Belum ada data.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>

{{-- 💅 STYLE --}}
<style>
  body { background: #f9fafb; font-family: 'Poppins', sans-serif; color: #333; }
  .container { max-width: 900px; margin: 40px auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
  h1 { text-align: center; color: #1e3a8a; margin-bottom: 20px; }

  .table { width: 100%; border-collapse: collapse; margin-top: 15px; }
  th, td { padding: 10px 12px; text-align: left; border-bottom: 1px solid #ddd; }
  th { background: #1e3a8a; color: white; }
  tr:hover { background: #f3f4f6; }

  .btn { border: none; padding: 8px 12px; border-radius: 10px; font-weight: 600; cursor: pointer; text-decoration: none; transition: all 0.3s ease; }
  .btn:hover { transform: scale(1.05); }

  .btn-add { background: linear-gradient(90deg,#38bdf8,#3b82f6); color: #fff; }
  .btn-edit { background: linear-gradient(90deg,#22c55e,#16a34a); color: #fff; }
  .btn-delete { background: linear-gradient(90deg,#ef4444,#b91c1c); color: #fff; }

  .alert { padding: 12px; border-radius: 8px; font-weight: 600; margin-bottom: 15px; }
  .alert-success { background: #dcfce7; color: #166534; border-left: 5px solid #22c55e; }
  .alert-error { background: #fee2e2; color: #b91c1c; border-left: 5px solid #ef4444; }

  .actions { display: flex; gap: 8px; }
</style>

{{-- AUTO HIDE ALERT --}}
<script>
  setTimeout(() => {
    document.querySelectorAll('.alert').forEach(el => el.style.display='none');
  }, 3000);
</script>
@endsection
