<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal - SIMPERSITE</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-['Roboto']">
    <div class="flex h-screen">
        {{-- Sidebar --}}
        <x-sidebar-nav />

        {{-- Konten utama --}}
        <main class="flex-1 overflow-y-auto p-10">
            <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-2xl p-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3">
                    Edit Jadwal
                </h2>

                {{-- Form Edit --}}
                <form action="{{ route('jadwal.update', $jadwal->id_jadwal) }}" method="POST" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Kode MK</label>
                        <input type="text" name="kode_mk" value="{{ $jadwal->kode_mk }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Nama Kelas</label>
                        <input type="text" name="nama_kelas" value="{{ $jadwal->nama_kelas }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Kelas Mahasiswa</label>
                        <input type="text" name="kelas_mahasiswa" value="{{ $jadwal->kelas_mahasiswa }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Sebaran Mahasiswa</label>
                        <input type="number" name="sebaran_mahasiswa" value="{{ $jadwal->sebaran_mahasiswa }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Hari</label>
                        <select name="hari" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                            <option value="">-- Pilih Hari --</option>
                            <option value="Senin" {{ $jadwal->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ $jadwal->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ $jadwal->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ $jadwal->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Jumat" {{ $jadwal->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block font-medium text-gray-700 mb-1">Jam Mulai</label>
                            <input type="time" name="jam_mulai" value="{{ $jadwal->jam_mulai }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700 mb-1">Jam Selesai</label>
                            <input type="time" name="jam_selesai" value="{{ $jadwal->jam_selesai }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                        </div>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Ruangan</label>
                        <input type="text" name="ruangan" value="{{ $jadwal->ruangan }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 mb-1">Daya Tampung</label>
                        <input type="number" name="daya_tampung" value="{{ $jadwal->daya_tampung }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" required>
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="flex justify-end space-x-3 pt-5 border-t">
                        <a href="{{ route('jadwal.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition">
                            Kembali
                        </a>
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
