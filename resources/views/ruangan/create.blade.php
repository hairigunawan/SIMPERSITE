<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ruangan</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-Roboto">

      <div class="flex h-screen">
      <x-sidebar-nav />

            <main class="flex-1 flex flex-col">
                  <x-header>TAMBAH RUANGAN</x-header>

                  <section class="p-4 flex-1 mx-6 mb-[28px] rounded-xl border border-gray-300">
                        <div class="rounded-xl p-2">
                              <div class="flex justify-start gap-auto h-10 mb-5 items-center">
                                    <a href="{{ route('ruangan.index') }}" class="flex text-[#30B280] py-2 px-2 gap-2 items-center hover:text-green-300">
                                          <svg class="w-5 h-5 text-[#30B280]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                                          </svg>
                                          <p class="flex text-[#30B280] font-medium">
                                          Tambah Ruangan
                                          </p>
                                    </a>
                              </div>

                              {{-- Menampilkan Error Validasi --}}
                              @if ($errors->any())
                              <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100" role="alert">
                                    <span class="font-medium">Oops! Ada yang salah:</span>
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                          <li>- {{ $error }}</li>
                                    @endforeach
                                    </ul>
                              </div>
                              @endif

                              <div class="flex mx-auto justify-center">
                                    <form action="{{ route('ruangan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                          <div class="flex items-start">
                                                <div class="pl-10">
                                                      <div class="flex gap-4 px-4 py-3 ">
                                                            <label class="flex flex-col flex-1">
                                                                  <p class="text-[#0d141b] text-base font-medium leading-normal pb-2">Kode Ruangan</p>
                                                                  <input type="text" name="kode_ruangan" placeholder="Masukan kode ruangan" class="border py-2 w-80 rounded-sm px-2" value="{{ old('kode_ruangan') }}" required/>
                                                            </label>
                                                      </div>
                                                      <div class="flex gap-4 px-4 py-1">
                                                            <label class="flex flex-col flex-1">
                                                                  <p class="text-[#0d141b] text-base font-medium leading-normal pb-2">Nama Ruangan</p>
                                                                  <input type="text" name="nama_ruangan" placeholder="Masukan nama ruangan" class="border py-2 w-80 rounded-sm px-2" value="{{ old('nama_ruangan') }}" required/>
                                                            </label>
                                                      </div>
                                                      {{-- Input Kapasitas --}}
                                                      <div class="flex gap-4 px-4 py-1">
                                                            <label class="flex flex-col flex-1">
                                                                  <p class="text-[#0d141b] text-base font-medium leading-normal pb-2">Kapasitas</p>
                                                                  <input type="number" name="kapasitas" placeholder="Masukan kapasitas ruangan" class="border py-2 w-80 rounded-sm px-2" value="{{ old('kapasitas') }}" required/>
                                                            </label>
                                                      </div>
                                                      {{-- Input Lokasi --}}
                                                      <div class="flex gap-4 px-4 py-1">
                                                            <label class="flex flex-col flex-1">
                                                                  <p class="text-[#0d141b] text-base font-medium leading-normal pb-2">Lokasi</p>
                                                                  <input type="text" name="lokasi" placeholder="Masukan lokasi ruangan" class="border py-2 w-80 rounded-sm px-2" value="{{ old('lokasi') }}" required/>
                                                            </label>
                                                      </div>
                                                </div>

                                                {{-- Input Gambar --}}
                                                <div class="flex flex-col p-4">
                                                      <p class="text-[#0d141b] text-base font-medium leading-normal pb-2">Upload Gambar</p>
                                                      <div class="flex flex-col items-center w-full h-auto gap-6 rounded-lg border-2 border-dashed border-[#cfdbe7] px-6 py-14">
                                                            <p class="text-[#0d141b] text-sm font-normal leading-normal max-w-[480px] text-center">Pilih gambar ruangan untuk diupload</p>
                                                            <input type="file" name="gambar" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:border-0 rounded-xl file:font-semibold file:text-[#30B280] bg-gray-200
                                                            "/>
                                                      </div>
                                                      {{-- Tombol Submit --}}
                                                      <div class="flex pr-4 mt-8 items-center mx-auto">
                                                            <button type="submit" class="flex bg-[#30B280] py-2 px-4 rounded-[8px] gap-2 items-center hover:bg-[#298e67]">
                                                            <span class="text-white text-sm font-medium">Tambahkan Ruangan</span>
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
    <x-footer />
</body>
</html>