<x-layout>
  <main class="flex w-screen">
      <x-Sidebar></x-Sidebar>
      <div class="relative  bg-[rgba(255,2555,255,1)] w-full h-[95vh] mx-5 my-5 rounded-xl items-start p-5 md:px-8 overflow-y-scroll">

      
        <!-- Main Section -->
        <section class="px-6 py-12">
          <div class="text-center">
            <h1 class="text-5xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-pink-400">Track Your Dreams</h1>
            <p class="text-slate-600 text-xl  mt-2">Turn your tasks into achievements and keep moving forward!</p>
          </div>
      
          <!-- Cards Section -->
          <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-gradient-to-br from-green-400 to-blue-500 rounded-xl shadow-lg p-6">
              <h2 class="text-2xl text-white font-bold">Today's Progress</h2>
              <p class="text-white text-opacity-80 mt-2">Complete your top priority tasks for today!</p>
              <div class="mt-4 bg-white bg-opacity-20 rounded-full h-2.5">
                <div class="bg-white h-2.5 rounded-full" style="width: 75%;"></div>
              </div>
              <p class="text-right text-sm mt-1 text-white text-opacity-80">75% Complete</p>
            </div>
      
            <!-- Card 2 -->
            <div class="bg-gradient-to-br from-pink-400 to-red-500 rounded-xl shadow-lg p-6">
              <h2 class="text-2xl text-white font-bold">Weekly Goals</h2>
              <p class="text-white text-opacity-80 mt-2">Stay on track and achieve this week's milestones!</p>
              <div class="mt-4 bg-white bg-opacity-20 rounded-full h-2.5">
                <div class="bg-white h-2.5 rounded-full" style="width: 50%;"></div>
              </div>
              <p class="text-right text-sm mt-1 text-white text-opacity-80">50% Complete</p>
            </div>
      
            <!-- Card 3 -->
            <div class="bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl shadow-lg p-6">
              <h2 class="text-2xl text-white font-bold">Monthly Vision</h2>
              <p class="text-white text-opacity-80 mt-2">Keep pushing forward to reach your monthly goals!</p>
              <div class="mt-4 bg-white bg-opacity-20 rounded-full h-2.5">
                <div class="bg-white h-2.5 rounded-full" style="width: 30%;"></div>
              </div>
              <p class="text-right text-sm mt-1 text-white text-opacity-80">30% Complete</p>
            </div>

      </div>
  </main>
</x-layout>

