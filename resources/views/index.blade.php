{{-- resources/views/peminjam.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Peminjam</title>
    @vite('resources/css/app.css')
</head>
<body class="font-Roboto">

      <div class="flex h-screen">
            <x-sidebar-nav></x-sidebar-nav>

            <!-- Main Content -->
            <main class="flex-1 flex flex-col">
                  <!-- Header -->
                  <x-header>DAFTAR INVENTORY</x-header>

                  <!-- Content -->
                  <section class="p-4 flex-1 mx-6 mb-4 rounded-xl border border-gray-300">
                  <div class="rounded-xl p-2">
                        <div class="flex justify-between h-10 items-center text-transparent bg-clip-text hover:bg-[#26805d]">
                              <a href="../" class="flex text-[#30B280] py-2 px-2 gap-2 items-center">
                                    <svg class="w-5 h-5 text-[#30B280]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                                    </svg>
                                    <p class="flex text-[#30B280] font-medium ml-4">
                                    Daftar Inventory
                                    </p>
                              </a>
                        </div>
                        <div class="grid grid-cols-2">
                              <div class="flex items-start gap-3 p-10">
                                    <!-- Card Ruangan -->
                                    <div class="block mx-auto justify-center border border-gray-300 py-4 rounded-2xl px-6">
                                          <div class="flex justify-center">
                                                <div class="flex items-center gap-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 text-[#30B280]" viewBox="0 0 24 24" fill="currentColor">
                                                      <!-- Dinding kiri -->
                                                      <rect x="3" y="3" width="2" height="18" rx="1" />
                                                      <!-- Bingkai pintu -->
                                                      <rect x="15" y="3" width="2" height="18" rx="1" />
                                                      <!-- Daun pintu agak terbuka -->
                                                      <path d="M8 4l7 2v12l-7 2V4z" />
                                                      <!-- Gagang pintu -->
                                                      <circle cx="10" cy="12" r="1" fill="white"/>
                                                      </svg>
                                                      <div>
                                                      <h3 class="font-semibold text-sm text-gray-500">RUANGAN</h3>
                                                      <p class="font-bold text-4xl">15</p>
                                                      </div>
                                                </div>
                                          </div>                                                
                                          <a href="ruangan" class="flex mx-auto justify-center items-center bg-[#30B280] h-8 text-white text-sm mt-4 font-medium rounded-[8px]">
                                          View Ruangan
                                          </a>
                                    </div>

                                    <div class="block mx-auto justify-center border border-gray-300 py-4 rounded-2xl px-6">
                                          <div class="flex justify-center">
                                                <div class="flex items-center gap-5">
                                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 text-[#30B280]" fill="currentColor" viewBox="0 0 24 24">
                                                      <path d="M21 7H3c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h2l-1 2h2l1-2h10l1 2h2l-1-2h2c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-9 8c-2.21 
                                                       0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7-3h-2v-2h2v2z"/>
                                                      </svg>
                                                      <div>
                                                      <h3 class="font-semibold text-sm text-gray-500">PROYEKTOR</h3>
                                                      <p class="font-bold text-4xl">25</p>
                                                      </div>
                                                </div>
                                          </div>                                                
                                          <a href="proyektor" class="flex mx-auto justify-center items-center bg-[#30B280] h-8 text-white text-sm mt-4 font-medium rounded-[8px]">
                                          View Proyektor
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
                  </section>
            </main>
      </div>
      <x-footer></x-footer>
</body>
</html>
