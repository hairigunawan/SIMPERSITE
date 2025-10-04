@extends('layouts.app')

@section('content')
<div class="container py-5">

    <!-- Hero -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Peminjaman Ruangan Dan Proyektor</h2>
        <p class="text-muted">
            Selamat datang di portal layanan peminjaman sarana prasarana program studi Teknologi Informasi
        </p>
        <div class="d-flex justify-content-center gap-3 mt-3">
            <a href="#" class="btn btn-success">Booking Ruangan</a>
            <a href="#" class="btn btn-outline-success">Pinjam Proyektor</a>
        </div>
    </div>

    <!-- Statistik -->
    <div class="row mb-4">
        <!-- Ruangan -->
        <div class="col-md-6">
            <div class="card p-3 mb-3">
                <h5>Ruangan</h5>
                <div class="d-flex justify-content-around">
                    <!-- Ruangan Tersedia -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-success bg-opacity-25 d-flex align-items-center justify-content-center" style="width:35px; height:35px;">
                            <i class="fa-solid fa-calendar-check text-success"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="small">Ruangan Tersedia</span>
                            <span class="fw-bold text-success">{{ $ruangan['tersedia'] }}</span>
                        </div>
                    </div>

                    <!-- Ruangan Terpakai -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-danger bg-opacity-25 d-flex align-items-center justify-content-center" style="width:35px; height:35px;">
                            <i class="fa-solid fa-calendar-xmark text-danger"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="small">Ruangan Terpakai</span>
                            <span class="fw-bold text-danger">{{ $ruangan['terpakai'] }}</span>
                        </div>
                    </div>

                    <!-- Ruangan Perbaikan -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-warning bg-opacity-25 d-flex align-items-center justify-content-center" style="width:35px; height:35px;">
                            <i class="fa-solid fa-gear text-warning"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="small">Ruangan Perbaikan</span>
                            <span class="fw-bold text-warning">{{ $ruangan['perbaikan'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Proyektor -->
        <div class="col-md-6">
            <div class="card p-3 mb-3">
                <h5>Proyektor</h5>
                <div class="d-flex justify-content-around">
                    <!-- Proyektor Tersedia -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-success bg-opacity-25 d-flex align-items-center justify-content-center" style="width:35px; height:35px;">
                            <i class="fa-solid fa-video text-success"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="small">Proyektor Tersedia</span>
                            <span class="fw-bold text-success">{{ $proyektor['tersedia'] }}</span>
                        </div>
                    </div>

                    <!-- Proyektor Terpakai -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-danger bg-opacity-25 d-flex align-items-center justify-content-center" style="width:35px; height:35px;">
                            <i class="fa-solid fa-video-slash text-danger"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="small">Proyektor Terpakai</span>
                            <span class="fw-bold text-danger">{{ $proyektor['terpakai'] }}</span>
                        </div>
                    </div>

                    <!-- Proyektor Perbaikan -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-warning bg-opacity-25 d-flex align-items-center justify-content-center" style="width:35px; height:35px;">
                            <i class="fa-solid fa-screwdriver-wrench text-warning"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="small">Poyektor Perbaikan</span>
                            <span class="fw-bold text-warning">{{ $proyektor['perbaikan'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Laboratorium Terpakai -->
    <h5 class="mb-3"><i class="fa-solid fa-flask text-danger"></i> Laboratorium Terpakai</h5>
    <div class="row">
        @foreach ($laboratorium as $lab)
        <div class="col-md-4 mb-3">
            <div class="card p-3 shadow border-danger">
                <h6 class="fw-bold">
                    <i class="fa-solid fa-laptop-code text-info"></i> {{ $lab->nama }}
                    <span class="badge bg-danger float-end">
                        <i class="fa-solid fa-ban"></i> {{ $lab->status }}
                    </span>
                </h6>
                <p class="mb-1"><i class="fa-solid fa-users"></i> <b>Kelas:</b> {{ $lab->kelas }}</p>
                <p class="mb-1"><i class="fa-solid fa-book"></i> <b>Mata Kuliah:</b> {{ $lab->matkul }}</p>
                <p class="mb-0"><i class="fa-solid fa-clock"></i> <b>Waktu:</b> {{ $lab->waktu }}</p>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
