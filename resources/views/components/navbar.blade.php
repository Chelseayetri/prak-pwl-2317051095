<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-semibold" href="/">Praktikum PWL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav" class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="/user">List User</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('user.create') }}">Create User</a></li>
      </ul>
      <span class="navbar-text small text-white-50">Controller &amp; View · Modul 4</span>
    </div>
  </div>
</nav>
