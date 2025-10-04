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
            @auth
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalRuangan">Booking Ruangan</button>
                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalProyektor">Pinjam Proyektor</button>
            @else
                <button class="btn btn-secondary" disabled>Login untuk Booking Ruangan</button>
                <button class="btn btn-outline-secondary" disabled>Login untuk Pinjam Proyektor</button>
            @endauth
        </div>
    </div>

    <!-- Statistik Peminjaman -->
    <div class="row text-center mb-5">
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold text-success">Total Ruangan Dipinjam</h5>
                    <p class="display-5 fw-bold mb-0">{{ $totalRuangan ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold text-success">Total Proyektor Dipinjam</h5>
                    <p class="display-5 fw-bold mb-0">{{ $totalProyektor ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Peminjaman Aktif -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-success text-white fw-bold">
            Daftar Peminjaman
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="table-success">
                    <tr>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Keperluan</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Jam</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($peminjamanAktif ?? [] as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ ucfirst($p->jenis) }}</td>
                            <td>{{ $p->keperluan }}</td>
                            <td>{{ $p->tgl_pinjam ?? '-' }}</td>
                            <td>{{ $p->tgl_kembali ?? '-' }}</td>
                            <td>{{ $p->jam_mulai ?? '-' }} - {{ $p->jam_selesai ?? '-' }}</td>
                            <td>
                                @if($p->status == 'disetujui')
                                    <span class="badge bg-success">Disetujui</span>
                                @elseif($p->status == 'ditolak')
                                    <span class="badge bg-danger">Ditolak</span>
                                @else
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-3">Belum ada peminjaman</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal Ruangan -->
<div class="modal fade" id="modalRuangan" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('peminjaman.ruangan') }}" class="modal-content">
      @csrf
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Form Peminjaman Ruangan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Nama Peminjam</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Peminjaman</label>
          <input type="date" name="tgl_pinjam" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Pengembalian</label>
          <input type="date" name="tgl_kembali" class="form-control" required>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" required>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Keperluan</label>
          <textarea name="keperluan" class="form-control" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Kirim</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Proyektor -->
<div class="modal fade" id="modalProyektor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('peminjaman.proyektor') }}" class="modal-content">
      @csrf
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Form Peminjaman Proyektor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Nama Peminjam</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Peminjaman</label>
          <input type="date" name="tgl_pinjam" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Pengembalian</label>
          <input type="date" name="tgl_kembali" class="form-control" required>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" required>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Keperluan</label>
          <textarea name="keperluan" class="form-control" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Kirim</button>
      </div>
    </form>
  </div>
</div>
@endsection
