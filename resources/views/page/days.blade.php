<x-layout>
  <style>
    /* Custom rotation for clock hours */
    .hour:nth-child(1)  { transform: rotate(30deg) translateY(-8rem) rotate(-30deg); }
    .hour:nth-child(2)  { transform: rotate(60deg) translateY(-8rem) rotate(-60deg); }
    .hour:nth-child(3)  { transform: rotate(90deg) translateY(-8rem) rotate(-90deg); }
    .hour:nth-child(4)  { transform: rotate(120deg) translateY(-8rem) rotate(-120deg); }
    .hour:nth-child(5)  { transform: rotate(150deg) translateY(-8rem) rotate(-150deg); }
    .hour:nth-child(6)  { transform: rotate(180deg) translateY(-8rem) rotate(-180deg); }
    .hour:nth-child(7)  { transform: rotate(210deg) translateY(-8rem) rotate(-210deg); }
    .hour:nth-child(8)  { transform: rotate(240deg) translateY(-8rem) rotate(-240deg); }
    .hour:nth-child(9)  { transform: rotate(270deg) translateY(-8rem) rotate(-270deg); }
    .hour:nth-child(10) { transform: rotate(300deg) translateY(-8rem) rotate(-300deg); }
    .hour:nth-child(11) { transform: rotate(330deg) translateY(-8rem) rotate(-330deg); }
    .hour:nth-child(12) { transform: rotate(360deg) translateY(-8rem) rotate(-360deg); }
  </style>
  <main class="flex w-screen">
      <x-Sidebar></x-Sidebar>
      <div class="relative  bg-[rgba(255,2555,255,1)] w-full h-[95vh] mx-5 my-5 rounded-xl items-start p-5 md:px-8 overflow-y-scroll">
           <!-- Clock Container -->
  <div class="relative w-96 h-96 bg-gray-900 rounded-full shadow-lg flex items-center justify-center">
    <!-- Center Circle -->
    <div class="absolute w-6 h-6 bg-white rounded-full"></div>

    <!-- Clock Hours -->  
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-yellow-400 to-pink-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>1</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-blue-400 to-teal-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>2</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-purple-400 to-pink-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>3</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-green-400 to-blue-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>4</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-red-400 to-yellow-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>5</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-teal-400 to-green-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>6</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-pink-400 to-purple-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>7</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-orange-400 to-red-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>8</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-blue-400 to-teal-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>9</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-yellow-400 to-pink-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>10</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-purple-400 to-blue-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>11</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
    <div class="absolute w-16 h-16 bg-gradient-to-tr from-green-400 to-yellow-400 rounded-full flex flex-col items-center justify-center text-xs font-bold text-white hour">
      <span>12</span>
      <input type="text" placeholder="Activity" class="mt-1 w-12 text-center text-black text-[10px] border rounded">
    </div>
  </div>
      </div>
  </main>
</x-layout>

