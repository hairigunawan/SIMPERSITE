<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jadwal - SIMPERSITE</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-Roboto">

    <div class="flex h-screen">
        {{-- Sidebar --}}
        <x-sidebar-nav />

        {{-- Main Content --}}
        <main class="flex-1 flex flex-col">
            <x-header>DAFTAR JADWAL</x-header>

            <section class="p-6 mx-8 mb-6 bg-white rounded-2xl shadow-sm border border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <a href="../" class="flex items-center gap-2 text-[#30B280] hover:text-[#248c62] transition">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                        </svg>
                        <span class="font-medium">Kembali</span>
                    </a>
                    <a href="{{ route('jadwal.create') }}" 
                       class="flex items-center gap-2 bg-[#30B280] hover:bg-[#24996b] text-white px-4 py-2 rounded-lg shadow transition">
                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2.5" d="M5 12h14m-7 7V5"/>
                        </svg>
                        <span class="text-sm font-medium">Tambah Jadwal</span>
                    </a>
                </div>

                {{-- Notifikasi --}}
                @if (session('success'))
                    <div class="p-3 mb-6 text-sm text-green-700 bg-green-100 border border-green-300 rounded-lg">
                        <span class="font-semibold">Success!</span> {{ session('success') }}
                    </div>
                @endif

                {{-- Grid Jadwal --}}
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @forelse ($jadwals as $jadwal)
                        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition border border-gray-200">
                            <div class="p-5 text-center">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $jadwal->nama_kelas }}</h3>
                                <p class="text-xs text-gray-400 mb-3">Kode MK: {{ $jadwal->kode_mk }}</p>

                                <div class="text-sm text-gray-600 space-y-1">
                                    <p><span class="font-medium">Kelas:</span> {{ $jadwal->kelas_mahasiswa }}</p>
                                    <p><span class="font-medium">Hari:</span> {{ $jadwal->hari }}</p>
                                    <p><span class="font-medium">Waktu:</span> {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</p>
                                    <p><span class="font-medium">Ruangan:</span> {{ $jadwal->ruangan }}</p>
                                    <p class="text-gray-500 text-xs mt-1">Daya tampung: {{ $jadwal->daya_tampung }} orang</p>
                                </div>

                                <div class="flex justify-center gap-3 mt-5">
                                    <a href="{{ route('jadwal.edit', $jadwal->id_jadwal) }}" 
                                       class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1.5 rounded-lg text-xs font-medium transition">
                                       Edit
                                    </a>
                                    <form action="{{ route('jadwal.destroy', $jadwal->id_jadwal) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded-lg text-xs font-medium transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-10">
                            <p class="text-gray-500">Belum ada data jadwal yang tersedia.</p>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="mt-8 flex justify-center">
                    {{ $jadwals->links() }}
                </div>
            </section>
        </main>
    </div>

</body>
</html>
