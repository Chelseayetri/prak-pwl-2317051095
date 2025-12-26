@props(['users'])

<div class="table-responsive">
  <table class="table table-hover table-striped align-middle mb-0">
    <thead class="table-dark">
      <tr>
        <th style="width:80px">ID</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->nama }}</td>
          <td>{{ $user->nim }}</td>
          <td><span class="badge text-bg-primary">{{ $user->nama_kelas }}</span></td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="text-center text-muted py-4">Belum ada data.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
