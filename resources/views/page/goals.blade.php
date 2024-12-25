<x-layout>
    <main class="flex w-screen">
        <x-Sidebar></x-Sidebar>

        <!-- Main Content -->
        <div
            class="relative  bg-[rgba(255,2555,255,1)] w-full h-[95vh] mx-5 my-5 rounded-xl items-start p-5 md:px-8 overflow-y-scroll">

            @if (session('created'))
                <x-massage color="green" text="Succes created"></x-massage>
            @endif

            @if (session('updated'))
                <x-massage color="yellow" text="Succes updated"></x-massage>
            @endif

            @if (session('deleted'))
                <x-massage color="red" text="Succes deletes"></x-massage>
            @endif


            <div class=" fixed right-10 z-30 bottom-10 flex flex-col justify-center items-center gap-2">
                {{-- <div class="w-6 h-6 relative rounded-full bg-blue-400 group">
                    <p class="px-4 absolute -left-16 hidden group-hover:block shadow-lg text-sm bg-blue-200">week</p>
                </div> --}}
                <button data-modal-target="create" data-modal-toggle="create"
                class=" rounded-full w-16 h-16  text-xl bg-slate-800 text-white hover:scale-105">+</button>
            </div>
           

            <!-- Header -->
            <header class="col-span-3 lg:col-span-4 h-10 flex   md:flex-row flex-col md:justify-between  items-center md:mb-6 mb-16">
                <div class="flex items-center gap-5">
                    <h1 class="text-3xl font-bold text-slate-600">YOUR GOALS</h1>

                </div>
                <div class="flex ">
                    <form action="{{ url('goals') }}" class="max-w-md mx-auto" method="GET">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-slate-700 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input value="{{ request('search') }}" name="search" type="search" id="default-search"
                                class="block w-full p-3 ps-10 text-sm text-slate-700 border border-gray-300 rounded-lg rounded-e-none bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Title, Descrip..." />
                        </div>
                    </form>

                    <x-button id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <p class="rotate-90">></p>
                    </x-button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">

                            <!-- all -->
                            <li>
                                <a href="{{ url('goals') }}" type="submit" name="status" value="Urgent"
                                    class="block w-full text-start px-4 py-2 hover:bg-slate-100 dark:hover:bg-red-600 dark:hover:text-white">
                                    all
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('goals/day') }}" type="submit" name="status" value="Urgent"
                                    class="block w-full text-start px-4 py-2 hover:bg-red-100 dark:hover:bg-red-600 dark:hover:text-white">
                                    day
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('goals/week') }}" type="submit" name="status" value="Normal"
                                    class="block w-full text-start px-4 py-2 hover:bg-green-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    week
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('goals/month') }}" type="submit" name="status" value="Important"
                                    class="block w-full text-start px-4 py-2 hover:bg-yellow-100 dark:hover:bg-yellow-600 dark:hover:text-white">
                                    month
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('goals/year') }}" type="submit" name="status" value="Important"
                                    class="block w-full text-start px-4 py-2 hover:bg-blue-100 dark:hover:bg-yellow-600 dark:hover:text-white">
                                    year
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ url('goals/completed') }}" type="submit" name="status" value="Important"
                                    class="block w-full text-start px-4 py-2 hover:bg-blue-100 dark:hover:bg-yellow-600 dark:hover:text-white">
                                    completed
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

            </header>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                @foreach ($data as $goal)
                <x-goal :data="$goal"></x-goal>

                @endforeach
            </div>


        </div>


    </main>
</x-layout>

{{-- create --}}
<x-modal idmodal="create">
    <div class="relative w-[50rem] bg-white rounded-lg shadow dark:bg-gray-700 -translate-y-4 pb-4">

        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-slate-700 dark:text-white">
                Create New Goal
            </h3>
            <button type="button"
                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-slate-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="create">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <form method="post" class="flex md:flex-row flex-col gap-4 p-4 md:p-5 justify-between" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-center md:w-1/2">
                <label for="dropzone-filee"
                    class="flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-center text-gray-500 dark:text-gray-400 p-4"><span
                                class="font-semibold">Click to upload</span> or drag and drop</p>
                    </div>
                    <input name="image" id="dropzone-filee" type="file" class="hidden" />
                </label>
            </div>

            <div class=" flex flex-col md:w-1/2 gap-3 px-5">                
                <div>
                    <label for="title" class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Title :</label>
                    <x-input 
                        name="title" 
                        type="text" 
                        class="block w-full border-slate-400 rounded-lg focus:border-slate-500 text-slate-500 focus:ring-slate-700"
                    ></x-input>
                </div>
                
                <div>
                    <label for="target_value" class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Target Value :</label>
                    <x-input 
                        name="target_value" 
                        type="text" 
                        class="block w-full border-slate-400 rounded-lg focus:border-slate-500 text-slate-500 focus:ring-slate-700"
                    ></x-input>
                </div>
                
                <div>
                    <label for="current_value" class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Current Value :</label>
                    <x-input 
                        name="current_value" 
                        type="text" 
                        min="0" 
                        value="nothing yet" 
                        class="block w-full border-slate-400 rounded-lg focus:border-slate-500 text-slate-500 focus:ring-slate-700"
                    ></x-input>
                </div>
                
                <div>
                    <label for="current_persen" class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Current Persen :</label>
                    <x-input 
                        name="current_persen" 
                        type="number" 
                        min="0" 
                        value="0" 
                        class="block w-full border-slate-400 rounded-lg focus:border-slate-500 text-slate-500 focus:ring-slate-700"
                    ></x-input>
                </div>
                
                
                
                <div>
                    <label for="timeline" class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Timeline :</label>
                    <select name="timeline" id="timeline" class="block w-full bg-gray-50 border border-gray-300 text-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="day">day</option>
                        <option value="week">week</option>
                        <option value="month">month</option>
                        <option value="year">year</option>
                    </select>
                </div>
                

 
                
                <x-button class="p-3 rounded-xl" type="submit">Create goals</x-button>
            </div>
        </form>
    </div>


</x-modal>
