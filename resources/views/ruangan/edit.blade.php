<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Ruangan - SIMPERSITE</title>
</head>
<body class="bg-gray-100 font-Roboto">
    <div class="flex">
        <x-sidebar-nav />

        <div class="flex-1 ml-64 min-h-screen flex flex-col">
            <div class="p-6">
                <x-header></x-header>

                <main class="mt-6">
                    <div class="container p-8 bg-white rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-6">
                            <h1 class="text-xl font-bold text-gray-700">Edit Ruangan</h1>
                            <a href="{{ route('ruangan.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                                Kembali
                            </a>
                        </div>

                        @if ($errors->any())
                            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                                <span class="font-medium">Error!</span>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="kode_ruangan" class="block text-sm font-medium text-gray-700">Kode Ruangan</label>
                                    <input type="text" name="kode_ruangan" id="kode_ruangan"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           value="{{ old('kode_ruangan', $ruangan->kode_ruangan) }}">
                                </div>
                                <div>
                                    <label for="nama_ruangan" class="block text-sm font-medium text-gray-700">Nama Ruangan</label>
                                    <input type="text" name="nama_ruangan" id="nama_ruangan"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           value="{{ old('nama_ruangan', $ruangan->nama_ruangan) }}">
                                </div>
                                <div>
                                    <label for="kapasitas" class="block text-sm font-medium text-gray-700">Kapasitas</label>
                                    <input type="number" name="kapasitas" id="kapasitas"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           value="{{ old('kapasitas', $ruangan->kapasitas) }}">
                                </div>
                                <div>
                                    <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                    <input type="text" name="lokasi" id="lokasi"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                           value="{{ old('lokasi', $ruangan->lokasi) }}">
                                </div>
                                <div>
                                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                                    <input type="file" name="gambar" id="gambar"
                                           class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                                    @if ($ruangan->gambar)
                                        <img src="{{ asset('storage/'.$ruangan->gambar) }}" alt="Gambar Ruangan"
                                             class="mt-2 h-24 rounded">
                                    @endif
                                </div>
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
