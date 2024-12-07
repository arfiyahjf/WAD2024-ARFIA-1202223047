<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Universitas EAD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('dosen.index') }}">Daftar Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dosen.create') }}">Tambah Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>