<x-layout>
  <main class="flex w-screen">
      <x-Sidebar></x-Sidebar>
      <div class="relative  bg-[rgba(255,2555,255,1)] w-full h-[95vh] mx-5 my-5 rounded-xl items-start p-5 md:px-8 overflow-y-scroll">
        {{-- blur --}}
        <div class="w-72 h-60 absolute right-0 bottom-0 opacity-25 z-10 bg-gradient-to-b from-red-500 to-blue-400 blur-3xl"></div>
        <div class="w-72 h-60 absolute right-0 -top-10 opacity-25 -left-16 z-16 bg-gradient-to-b from-blue-500 to-red-400 blur-3xl"></div>

        <!-- Main Section -->
        <section class="px-6 py-12 z-20">
          <div class="text-center z-20">
            <h1 class="md:text-5xl text-3xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-pink-400 z-20">Track Your Dreams</h1>
            <p class="text-slate-600 text-xl  mt-2 z-20">Turn your tasks into achievements and keep moving forward!</p>
          </div>
      
          <!-- Cards Section -->
          <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-10 z-20">
            <div  class="rounded hover:scale-105 h-96 duration-500 shadow-lg transition-all z-20 relative group overflow-hidden" alt="" style="background-image: url({{ asset('assets/car.jpeg') }}); background-size: cover;">
              <h1 class="absolute bottom-0 bg-gradient-to-t from-black to-transparent text-slate-200  text-lg font-medium w-full pt-16 p-2 translate-y-full transition-all duration-300 group-hover:translate-y-0">Achiev your dream car</h1>
            </div>
            <div  class="rounded md:scale-110 hover:scale-[115%]  h-96 duration-500 shadow-lg transition-all z-20 relative group overflow-hidden" alt="" style="background-image: url({{ asset('assets/men.jpeg') }}); background-size: cover;">
              <h1 class="absolute bottom-0 bg-gradient-to-t from-black to-transparent text-slate-200  text-lg font-medium w-full pt-16 p-2 translate-y-full transition-all duration-300 group-hover:translate-y-0">Achiev your dream body</h1>
            </div>
            <div  class="rounded hover:scale-105 h-96 duration-500 shadow-lg transition-all z-20 relative group overflow-hidden" alt="" style="background-image: url({{ asset('assets/home.jpeg') }}); background-size: cover;">
              <h1 class="absolute bottom-0 bg-gradient-to-t from-black to-transparent text-slate-200  text-lg font-medium w-full pt-16 p-2 translate-y-full transition-all duration-300 group-hover:translate-y-0">Achiev your dream home</h1>
            </div>
          </div>

  </main>
</x-layout>

