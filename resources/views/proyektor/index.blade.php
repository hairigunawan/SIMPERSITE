<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyektor - SIMPERSITE</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-Roboto">

<div class="flex h-screen">
    <x-sidebar-nav />

    <main class="flex-1 flex flex-col">
        <x-header>DAFTAR PROYEKTOR</x-header>

        <section class="p-4 flex-1 mx-6 mb-4 rounded-xl border border-gray-300">
            <div class="rounded-xl p-2">
                <div class="flex justify-between gap-auto border h-10 mb-5 items-center text-transparent bg-clip-text hover:bg-[#26805d]">
                    <a href="../" class="flex text-[#30B280] py-2 px-2 gap-2 items-center hover:text-green-300">
                        <svg class="w-5 h-5 text-[#30B280]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                        </svg>
                        <p class="flex text-[#30B280] font-medium ml-4">
                            Daftar Proyektor
                        </p>
                    </a>
                    <a href="{{ route('proyektor.create') }}" class="flex bg-[#30B280] py-2 px-2 rounded-[8px] gap-2 items-center hover:bg-[#298e67]">
                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2.5" d="M5 12h14m-7 7V5"/>
                        </svg>
                        <p class="text-white text-sm font-medium">Tambah Proyektor</p>
                    </a>
                </div>

                @if (session('success'))
                    <div class="p-2 mb-4 text-sm text-[#30B280] bg-green-100 rounded-lg" role="alert">
                        <span class="font-medium">Success!</span> {{ session('success') }}
                    </div>
                @endif

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 p-10">
                    @forelse ($proyektors as $proyektor)
                        <div class="bg-white rounded-lg max-w-40 overflow-hidden flex flex-col border-b border-l border-r shadow-md border-gray-300">
                            <div class="grid justify-center py-4">
                                <img src="{{ asset('storage/' . $proyektor->gambar) }}" alt="Gambar {{ $proyektor->nama_proyektor }}" class="w-full h-30 object-cover">
                                <h3 class="text-m font-bold text-gray-700">{{ $proyektor->merk }} {{ $proyektor->tipe }}</h3>
                                <p class="text-xs text-gray-400 mb-2">Kode: {{ $proyektor->kode_proyektor }}</p>
                                <p class="text-xs text-gray-500 mb-2">Status:
                                    <span class="font-semibold {{ $proyektor->status == 'tersedia' ? 'text-green-600' : ($proyektor->status == 'dipinjam' ? 'text-yellow-600' : 'text-red-600') }}">
                                        {{ ucfirst($proyektor->status) }}
                                    </span>
                                </p>
                                <a href="{{ route('proyektor.show', $proyektor->id) }}" class="block w-33 text-center mt-2 rounded-md bg-[#30B280] px-4 py-2 text-xs font-medium text-white shadow-sm transition-colors hover:bg-[#23805c]">View Detail</a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-1 sm:col-span-2 lg:col-span-3 xl:col-span-4 text-center py-8">
                            <p class="text-gray-500">Data proyektor belum tersedia.</p>
                        </div>
                    @endforelse
                </div>

                <div class="mt-8">
                    {{ $proyektors->links() }}
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>
