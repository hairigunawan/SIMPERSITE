<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>detail ruangan</title>
</head>
<body class="font-Roboto">
    <div class="flex">
        <x-sidebar-nav />

        <div class="flex-1 min-h-screen flex flex-col">
            <div>
                <x-header>DETAIL RUANGAN</x-header>

                  <section class="p-4 flex-1 mx-6 mb-[28px] rounded-xl border border-gray-300">
                        <div class="rounded-xl p-2">
                              <div class="flex justify-between gap-auto border  h-10 mb-5 items-center text-transparent bg-clip-text hover:bg-  [#26805d]">
                                    <a href="../" class="flex text-[#30B280] py-2 px-2 gap-2 items-center hover:text-green-300">
                                    <svg class="w-5 h-5 text-[#30B280]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                                    </svg>
                                    <p class="flex text-[#30B280] font-medium ml-4">
                                    Detail Ruangan
                                    </p>
                                    </a>
                              </div>
                              <div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                          <div class="md:col-span-2">
                                                <img src="{{ asset('storage/' . $ruangan->gambar) }}" alt="Foto {{ $ruangan->nama_ruangan }}" class="w-full h-90 object-cover rounded-lg shadow-sm">
                                          </div>

                                          <div class="md:col-span-1">
                                                <div class="bg-green-50 py-4 px-3 rounded-lg border border-gray-200 h-full flex flex-col">
                                                      <h2 class="text-lg font-semibold text-gray-700 mb-4">Informasi Ruangan</h2>
                                                      <div class="space-y-3 text-sm flex-grow">
                                                            <div>
                                                                  <p class="text-gray-500">Kode Ruangan</p>
                                                                  <p class="font-semibold text-gray-800">{{ $ruangan->kode_ruangan }}</p>
                                                            </div>
                                                            <div>
                                                                  <p class="text-gray-500">Nama Ruangan</p>
                                                                  <p class="font-semibold text-gray-800">{{ $ruangan->nama_ruangan }}</p>
                                                            </div>
                                                            <div>
                                                                  <p class="text-gray-500">Lokasi / Gedung</p>
                                                                  <p class="font-semibold text-gray-800">{{ $ruangan->lokasi }}</p>
                                                            </div>
                                                            <div>
                                                                  <p class="text-gray-500">Kapasitas</p>
                                                                  <p class="font-semibold text-gray-800">{{ $ruangan->kapasitas }} Orang</p>
                                                            </div>
                                                      </div>
                                                      <div class="mt-6 flex gap-3">
                                                            <a href="{{ route('ruangan.edit', $ruangan->id) }}" class="flex-1 text-center bg-emerald-500 hover:bg-emerald-600 text-sm text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                                            Ubah Data
                                                            </a>
                                                            <form action="{{ route('ruangan.destroy', $ruangan->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ruangan ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                                  <button type="submit" class="w-full bg-red-400 hover:bg-red-600 text-sm text-white font-medium py-2 px-4 rounded-lg transition duration-300">Hapus
                                                                  </button>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>
            </div>
        </div>
    </div>
</body>
</html>
