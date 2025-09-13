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
                  <x-header>Daftar Inventory</x-header>

                  <!-- Content -->
                  <section class="p-4 flex-1 border mx-6 rounded-xl border-gray-200 mb-4 sh">
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
                        <div class="grid grid-cols-2 w-120 gap-6 p-10">
                              <!-- Card Ruangan -->
                              <a href="ruangan" class="bg-white border hover:bg-gray-100 border-gray-200 rounded-xl shadow-sm p-6 flex items-center">
                              <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.5" 
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M3 10.5L12 4.5l9 6v9a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 19.5v-9z" />
                              </svg>
                              <div>
                                    <p class="text-[#434343] font-semibold text-xl">Ruangan</p>
                                    <p class="text-[#434343] text-4xl font-bold">15</p>
                              </div>
                              </a>

                              <div class="block mx-auto justify-center border px-2 py-1">
                                    <div class="flex justify-center">
                                          <div class="flex">
                                                <svg class="w-15 h-15 text-[#30B280]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M3 4.92857C3 3.90506 3.80497 3 4.88889 3H19.1111C20.195 3 21 3.90506 21 4.92857V13h-3v-2c0-.5523-.4477-1-1-1h-4c-.5523 0-1 .4477-1 1v2H3V4.92857ZM3 15v1.0714C3 17.0949 3.80497 18 4.88889 18h3.47608L7.2318 19.3598c-.35356.4243-.29624 1.0548.12804 1.4084.42428.3536 1.05484.2962 1.40841-.128L10.9684 18h2.0632l2.2002 2.6402c.3535.4242.9841.4816 1.4084.128.4242-.3536.4816-.9841.128-1.4084L15.635 18h3.4761C20.195 18 21 17.0949 21 16.0714V15H3Z"/>
                                                <path d="M16 12v1h-2v-1h2Z"/>
                                                </svg>
                                                <div>
                                                <h3 class="font-semibold text-xl ">Proyektor</h3>
                                                <p>25</p>
                                                </div>
                                          </div>
                                    </div>                                                
                                    <a href="ruangan" class="flex mx-auto justify-center items-center bg-[#30B280] h-8 text-white text-sm mt-4 font-medium rounded-xl">
                                    View Detail
                                    </a>
                              </div>
                        </div>
                  </div>
                  </section>
            </main>
      </div>
      <x-footer></x-footer>
</body>
</html>
