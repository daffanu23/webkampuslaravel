<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Merdeka - Web Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://unmer.ac.id/wp-content/uploads/2021/07/Gedung-Rektorat-Unmer-Malang.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">TEMPAT LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-light text-primary ms-2 px-3 fw-bold" href="#">Login Portal</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Selamat Datang di Kampus Juara</h1>
            <p class="lead">Mewujudkan Sumber Daya Manusia yang Unggul, Berkarakter, dan Berdaya Saing Global.</p>
            <a href="#" class="btn btn-warning btn-lg mt-3 fw-bold">Daftar Mahasiswa Baru</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold">Berita & Pengumuman</h2>
                <hr class="w-25 mx-auto text-primary" style="height: 3px; opacity: 1;">
            </div>
        </div>

        <div class="row">
            
            @if($dataBerita->isEmpty())
                <div class="col-12 text-center py-5 text-muted">
                    <div class="alert alert-info">Belum ada berita yang diposting saat ini.</div>
                </div>
            @else
                @foreach($dataBerita as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 border-0">
                            <img src="{{ $item->gambar ? $item->gambar : 'https://placehold.co/600x400/EEE/31343C?text=No+Image' }}" class="card-img-top" alt="Gambar Berita">
                            
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-dark">{{ $item->judul }}</h5>
                                <p class="card-text text-muted small">
                                    {{ Str::limit($item->isi, 120) }}
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-primary stretched-link">Baca Selengkapnya</a>
                            </div>
                            <div class="card-footer bg-white border-0 text-muted d-flex justify-content-between align-items-center">
                                <small>
                                    <i class="bi bi-clock"></i> 
                                    {{ $item->created_at ? $item->created_at->diffForHumans() : '-' }}
                                </small>
                                <small>Admin</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Universitas 2026</h5>
                    <p class="text-muted small">Kampus swasta terkemuka di kota Malang dengan semangat juang 45.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Kontak Kami</h5>
                    <ul class="list-unstyled text-muted small">
                        <li>Jl. Terusan Raya Dieng No. 62-64</li>
                        <li>Malang, Jawa Timur</li>
                        <li>Telp: (0341) 568395</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Tautan Cepat</h5>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-decoration-none text-muted">Pendaftaran</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Fakultas</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">E-Journal</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center small text-muted">
                &copy; 2026 Universitas Merdeka Malang. Created with Laravel.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>