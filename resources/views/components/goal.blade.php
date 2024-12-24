@props(["data"])

<div class="relative col-span-2 bg-purple-300 shadow-sm p-5 rounded-lg min-h-72 flex justify-between flex-col overflow-hidden ">
    <div class="flex justify-between items-start z-20">   
        <h4 class="font-semibold text-lg text-slate-700">{{ $data->current_value }}</h4>
        
        <span class="relative flex h-24 w-24 translate-x-1/2 -translate-y-1/2">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75
          {{ $data->current_persen < 35 ? 'bg-red-400' : ($data->current_persen < 70 ? 'bg-yellow-300' : 'bg-green-400') }}
          "></span>
          <span class="relative rounded-full h-24 w-24  flex justify-center items-center 
          {{ $data->current_persen < 35 ? 'bg-red-400' : ($data->current_persen < 70 ? 'bg-yellow-300' : 'bg-green-400') }}
          
          ">
           <p class="text-slate-50 text-2xl">{{ $data->current_persen }}%</p>
          </span>
        </span>

    </div>
    <div class="flex justify-between items-center z-20">   
        <h4 class="font-extrabold text-xl text-slate-8  00">{{ $data->target_value }}</h4>

        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="bg-black opacity-75 w-10 h-10  rounded-full hover:scale-110">
          <span class="material-symbols-outlined -translate-x-0 text-lg text-white  ">more_vert</span>
        </button>  
    </div>

      <div class="w-2/3 h-full bg-gradient-to-r from-purple-300 to-transparent absolute  top-0 right-0 "></div>
      <img src="{{ asset('storage/' . $data->image)  }}" class="w-2/3 absolute right-0 top-0 h-full opacity-25" alt="">


</div>
