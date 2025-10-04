<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPERSITE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>    
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="{{ route('home') }}">SIMPERSITE
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="peminjaman" class="nav-link">Peminjaman</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sarana & Prasarana</a></li>
                <li class="nav-item"><a href="#" class="btn btn-success ms-3">Log in</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <!-- Footer -->
<footer class="text-white py-4 mt-auto w-100" style="background-color:#0b2e1c;">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        
        <!-- Kiri -->
        <div class="mb-3 mb-md-0">
            <small>
                © Sistem Manajemen Peminjaman Sarpras - Program Studi TEKNOLOGI INFORMASI, 
                Politeknik Negeri Tanah Laut. Semua hak dilindungi.
            </small>
            <div class="mt-2">
                <a href="#" class="text-white text-decoration-none me-3">Kebijakan Privasi</a>
                <a href="#" class="text-white text-decoration-none">Syarat & Ketentuan</a>
            </div>
        </div>

        <!-- Kanan -->
        <div class="d-flex align-items-center">
            <i class="fa-regular fa-calendar text-white me-2 fs-5"></i>
            <span class="fw-bold">SIMPERSITE 2025</span>
        </div>
    </div>
</footer>

</body>
</html>
