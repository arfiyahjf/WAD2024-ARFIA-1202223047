<div class="p-3">
    <h5 class="text-center">Navigasi</h5>
    <hr>

    <!-- Form Pencarian -->
    <form action="{{ url()->current() }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari...">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>

    <!-- Kategori -->
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('dosen.index') }}">
                <i class="bi bi-person"></i> Daftar Dosen
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mahasiswa.index') }}">
                <i class="bi bi-people"></i> Daftar Mahasiswa
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dosen.create') }}">
                <i class="bi bi-person-plus"></i> Tambah Dosen
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mahasiswa.create') }}">
                <i class="bi bi-person-plus"></i> Tambah Mahasiswa
            </a>
        </li>
    </ul>

    <hr>

    <!-- Informasi Tambahan -->
    <div class="text-muted small">
        <p>Gunakan navigasi ini untuk mengelola data dosen dan mahasiswa.</p>
        <p>Pastikan untuk mengisi form dengan data yang valid.</p>
    </div>
</div>