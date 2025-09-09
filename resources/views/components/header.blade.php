<header class="flex justify-between items-center max-w-full px-10 py-5">
    <div>
        <h1 class="text-3xl font-bold text-[#434343]">
            {{ $slot }}
        </h1>
    </div>
    <img src="{{ asset('img/org.jpg')}}" alt="User Avatar" class="w-11 h-11 rounded-full object-cover cursor-pointer">
</header>