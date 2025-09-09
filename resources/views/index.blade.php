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
            <section class="p-4 flex-1 border mx-6 rounded-xl border-gray-200">
                <div class="rounded-xl p-2">
                  <a href="" class="flex text-[#30B280] font-medium hover:text-green-300 mb-10 gap-2">
                        <svg class="w-6 h-6 text-[#30B280] hover:text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                        </svg>Daftar Inventory
                  </a>
                    <div class="grid grid-cols-2 w-120 gap-6">
                        <!-- Card Ruangan -->
                        <a href="ruangan" class="bg-white border hover:bg-gray-100 border-gray-200 rounded-xl shadow-sm p-6 flex items-center gap-6">
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

                        <!-- Card Proyektor -->
                        <a href="proyektor" class="bg-white border border-gray-200 gap-6 hover:bg-gray-100 rounded-xl shadow-sm p-6 flex items-center">
                            <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.5" 
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" 
                                    d="M3 4.5h18m-18 0v12h18v-12M6 19.5h12" />
                            </svg>
                            <div class="">
                                <p class="text-[#434343] font-semibold text-xl">Proyektor</p>
                                <p class="text-[#434343] text-4xl font-bold">25</p>
                            </div>
                        </a>`
                    </div>
                </div>
            </section>
        </main>
    </div>
    <x-footer></x-footer>
</body>
</html>
