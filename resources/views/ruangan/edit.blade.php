<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update ruangan</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-Roboto">

      <div class="flex h-screen">
      <x-sidebar-nav />

            <main class="flex-1 flex flex-col">
                  <x-header>UPDATE RUANGAN</x-header>

                  <section class="pt-4 pl-4 flex-1 mx-6 mb-[28px] rounded-xl border border-gray-300">
                        <div class="rounded-xl p-2">
                              <div class="flex justify-start gap-auto h-10 mb-5 items-center">
                                    <a href="./" class="flex text-[#30B280] py-2 px-2 gap-2 items-center hover:text-green-300">
                                          <svg class="w-5 h-5 text-[#30B280]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                                          </svg>
                                          <p class="flex text-[#30B280] font-medium ml-3">
                                          Update Ruangan
                                          </p>
                                    </a>
                              </div>

                              @if ($errors->any())
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100" role="alert">
                                          <span class="font-medium">Oops! Ada yang salah:</span>
                                          <ul class="mt-1.5 list-disc list-inside">
                                          @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                    </div>
                              @endif

                              <div class="flex mx-auto justify-center">
                                    <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="flex items-start">
                                                <div>
                                                      <div class="flex gap-4 px-4 py-3">
                                                            <label class="flex flex-col flex-1">
                                                                  <p class="text-gray-800 text-base font-medium leading-normal pb-2">Kode Ruangan</p>
                                                                  <input type="text" name="kode_ruangan" placeholder="Masukan kode ruangan" class="border py-2 w-80 rounded-md px-2 border-gray-300 focus:ring-emerald-500 focus:border-emerald-500" value="{{ old('kode_ruangan', $ruangan->kode_ruangan) }}" required/>
                                                            </label>
                                                      </div>
                                                      <div class="flex gap-4 px-4 py-1">
                                                            <label class="flex flex-col flex-1">
                                                            <p class="text-gray-800 text-base font-medium leading-normal pb-2">Nama Ruangan</p>
                                                            <input type="text" name="nama_ruangan" placeholder="Masukan nama ruangan" class="border py-2 w-80 rounded-md px-2 border-gray-300 focus:ring-emerald-500 focus:border-emerald-500" value="{{ old('nama_ruangan', $ruangan->nama_ruangan) }}" required/>
                                                            </label>
                                                      </div>
                                                      <div class="flex gap-4 px-4 py-1">
                                                            <label class="flex flex-col flex-1">
                                                            <p class="text-gray-800 text-base font-medium leading-normal pb-2">Kapasitas</p>
                                                            <input type="number" name="kapasitas" placeholder="Masukan kapasitas ruangan" class="border py-2 w-80 rounded-md px-2 border-gray-300 focus:ring-emerald-500 focus:border-emerald-500" value="{{ old('kapasitas', $ruangan->kapasitas) }}" required/>
                                                            </label>
                                                      </div>
                                                      <div class="flex gap-4 px-4 py-1">
                                                            <label class="flex flex-col flex-1">
                                                            <p class="text-gray-800 text-base font-medium leading-normal pb-2">Lokasi</p>
                                                            <input type="text" name="lokasi" placeholder="Masukan lokasi ruangan" class="border py-2 w-80 rounded-md px-2 border-gray-300 focus:ring-emerald-500 focus:border-emerald-500" value="{{ old('lokasi', $ruangan->lokasi) }}" required/>
                                                            </label>
                                                      </div>
                                                </div>
                                                <div class="flex flex-col p-4">
                                                      <p class="text-gray-800 text-base font-medium leading-normal pb-2">Upload Gambar (Opsional)</p>
                                                      <div class="flex flex-col items-center w-full h-auto gap-4 rounded-lg border-2 border-dashed border-gray-300 px-6 py-5">
                                                            <p class="text-gray-600 text-sm font-normal text-center">Ganti gambar ruangan jika perlu.</p>
                                                            <input type="file" name="gambar" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-600 hover:file:bg-emerald-100"/>
                                                            <div class="mt-4">
                                                                  <p class="text-xs text-gray-500 mb-2">Gambar Saat Ini:</p>
                                                                  <img src="{{ asset('storage/' . $ruangan->gambar) }}" alt="Gambar saat ini" class="h-24 w-auto rounded-md object-cover">
                                                            </div>
                                                      </div>
                                                      {{-- Tombol Submit --}}
                                                      <div class="flex justify-center mt-4">
                                                            <button type="submit" class="bg-emerald-600 py-2 px-6 rounded-lg text-white text-sm font-medium hover:bg-emerald-700 transition-colors">
                                                            Simpan Perubahan
                                                            </button>
                                                      </div>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </section>
            </main>
    </div>
</body>
</html>
