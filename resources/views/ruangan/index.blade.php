<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ruangan - SIMPERSITE</title>
    {{-- Font Awesome untuk ikon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-Roboto">

      <div class="flex h-screen">
      <x-sidebar-nav />

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <!-- Header -->
            <x-header>Daftar Ruangan</x-header>

            <!-- Content -->
            <section class="p-4 flex-1 border mx-6 rounded-xl border-gray-200">
                <div class="rounded-xl p-2">
                  <div class="flex justify-between gap-auto h-10">
                        <a href="../" class="flex text-[#30B280] font-medium hover:text-green-300 mb-10 gap-2">
                              <svg class="w-6 h-6 text-[#30B280] hover:text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                              </svg>Daftar Ruangan
                        </a>
                        <a href="{{ route('ruangan.create') }}" class="flex bg-[#30B280] items-center py-1 px-2 text-white rounded-xl">
                              Tambah Ruangan
                        </a>
                  </div>
                        @if (session('success'))
                            <div class="p-2 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                                <span class="font-medium">Success!</span> {{ session('success') }}
                            </div>
                        @endif

                        {{-- Grid untuk Card Ruangan --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                            @forelse ($ruangans as $ruangan)
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col">
                                    <img src="{{ asset('storage/' . $ruangan->gambar) }}" alt="Gambar {{ $ruangan->nama_ruangan }}" class="w-full h-30 object-cover">
                                    <div class="p-2 flex flex-col flex-grow">
                                        <h3 class="text-lg font-bold text-white">{{ $ruangan->nama_ruangan }}</h3>
                                        <p class="text-sm text-gray-400 mb-4">{{ $ruangan->lokasi }}</p>

                                        {{-- Wrapper untuk tombol agar di bawah --}}
                                        <div class="mt-auto">
                                             <a href="{{ route('ruangan.show', $ruangan->id) }}" class="block w-full text-center mt-2 rounded-md bg-gray-700 px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800">
                                                View Detail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-span-1 sm:col-span-2 lg:col-span-3 xl:col-span-4 text-center py-12">
                                    <p class="text-gray-500">Data ruangan belum tersedia.</p>
                                </div>
                            @endforelse
                        </div>
                        
                        {{-- Link Paginasi --}}
                        <div class="mt-8">
                            {{ $ruangans->links() }}
                        </div>
                </div>
            </section>
        </main>
    </div>
    <x-footer />
</body>
</html>