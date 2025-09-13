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
                  <section class="p-4 flex-1 mx-6 mb-4">
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
                                                      <svg class="w-15 h-15 text-[#30B280]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                      <path d="M3 4.92857C3 3.90506 3.80497 3 4.88889 3H19.1111C20.195 3 21 3.90506 21 4.92857V13h-3v-2c0-.5523-.4477-1-1-1h-4c-.5523 0-1 .4477-1 1v2H3V4.92857ZM3 15v1.0714C3 17.0949 3.80497 18 4.88889 18h3.47608L7.2318 19.3598c-.35356.4243-.29624 1.0548.12804 1.4084.42428.3536 1.05484.2962 1.40841-.128L10.9684 18h2.0632l2.2002 2.6402c.3535.4242.9841.4816 1.4084.128.4242-.3536.4816-.9841.128-1.4084L15.635 18h3.4761C20.195 18 21 17.0949 21 16.0714V15H3Z"/>
                                                      <path d="M16 12v1h-2v-1h2Z"/>
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
                                                      <svg class="w-15 h-15 text-[#30B280]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                      <path d="M3 4.92857C3 3.90506 3.80497 3 4.88889 3H19.1111C20.195 3 21 3.90506 21 4.92857V13h-3v-2c0-.5523-.4477-1-1-1h-4c-.5523 0-1 .4477-1 1v2H3V4.92857ZM3 15v1.0714C3 17.0949 3.80497 18 4.88889 18h3.47608L7.2318 19.3598c-.35356.4243-.29624 1.0548.12804 1.4084.42428.3536 1.05484.2962 1.40841-.128L10.9684 18h2.0632l2.2002 2.6402c.3535.4242.9841.4816 1.4084.128.4242-.3536.4816-.9841.128-1.4084L15.635 18h3.4761C20.195 18 21 17.0949 21 16.0714V15H3Z"/>
                                                      <path d="M16 12v1h-2v-1h2Z"/>
                                                      </svg>
                                                      <div>
                                                      <h3 class="font-semibold text-sm text-gray-500">PROYEKTOR</h3>
                                                      <p class="font-bold text-4xl">25</p>
                                                      </div>
                                                </div>
                                          </div>                                                
                                          <a href="ruangan" class="flex mx-auto justify-center items-center bg-[#30B280] h-8 text-white text-sm mt-4 font-medium rounded-[8px]">
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
