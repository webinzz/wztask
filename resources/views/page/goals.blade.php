<x-layout>
    <main class="flex w-screen">
        <x-Sidebar></x-Sidebar>

        <!-- Main Content -->
        <div
            class="relative  bg-[rgba(255,2555,255,1)] w-full h-[95vh] me-5 my-5 rounded-xl items-start p-5 px-8 overflow-y-scroll">

            @if (session('created'))
                <x-massage color="green" text="Succes created"></x-massage>
            @endif

            @if (session('updated'))
                <x-massage color="yellow" text="Succes updated"></x-massage>
            @endif

            @if (session('deleted'))
                <x-massage color="red" text="Succes deletes"></x-massage>
            @endif


            <button data-modal-target="create" data-modal-toggle="create"
                class="fixed right-10 z-20 bottom-10 rounded-full w-16 h-16  text-xl bg-slate-800 text-white hover:scale-105">+</button>

            <!-- Header -->
            <header class="col-span-3 lg:col-span-4 h-10 flex flex-wrap justify-between items-center mb-6">
                <div class="flex items-center gap-5">
                    <h1 class="text-3xl font-bold text-slate-600">YOUR GOALS</h1>

                </div>
                <div class="flex ">
                    <form action="{{ url('goals') }}" class="max-w-md mx-auto" method="GET">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input value="{{ request('search') }}" name="search" type="search" id="default-search"
                                class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg rounded-e-none bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Title, Descrip..." />
                        </div>
                    </form>

                    <x-button id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <p class="rotate-90">></p>
                    </x-button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">

                            <!-- all -->
                            <li>
                                <a href="{{ url('goals') }}" type="submit" name="status" value="Urgent"
                                    class="block w-full text-start px-4 py-2 hover:bg-slate-100 dark:hover:bg-red-600 dark:hover:text-white">
                                    all
                                </a>
                            </li>

                            <!-- Filter Urgent -->
                            <li>
                                <a href="{{ url('goals/urgent') }}" type="submit" name="status" value="Urgent"
                                    class="block w-full text-start px-4 py-2 hover:bg-red-100 dark:hover:bg-red-600 dark:hover:text-white">
                                    Urgent
                                </a>
                            </li>

                            <!-- Filter Normal -->
                            <li>
                                <a href="{{ url('goals/normal') }}" type="submit" name="status" value="Normal"
                                    class="block w-full text-start px-4 py-2 hover:bg-green-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Normal
                                </a>
                            </li>

                            <!-- Filter Important -->
                            <li>
                                <a href="{{ url('goals/important') }}" type="submit" name="status" value="Important"
                                    class="block w-full text-start px-4 py-2 hover:bg-yellow-100 dark:hover:bg-yellow-600 dark:hover:text-white">
                                    Important
                                </a>
                            </li>

                            <!-- finish -->
                            <li>
                                <a href="{{ url('goals/finish') }}" type="submit" name="status" value="Important"
                                    class="block w-full text-start px-4 py-2 hover:bg-blue-100 dark:hover:bg-yellow-600 dark:hover:text-white">
                                    finished
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </header>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <x-goal></x-goal>
                @foreach ($data as $goals)
                @endforeach
            </div>


        </div>


    </main>
</x-layout>

{{-- create --}}
<x-modal idmodal="create" width="0px" title="create new goals">
    <form action="" method="post" class="flex gap-2 p-4 md:p-5">
        @csrf

        <div class="flex items-center justify-center w-60">
            <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-center text-gray-500 dark:text-gray-400 p-4"><span
                            class="font-semibold">Click to upload</span> or drag and drop</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>

        <div class=" flex flex-col ">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">add
                    title</label>
                <x-input name="input"></x-input>
            </div>

            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">add smart</label>
                <x-input name="input"></x-input>
            </div>
            
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">add time</label>
                <x-input name="input"></x-input>
            </div>
            <x-button type="submit">Create goals</x-button>
        </div>
    </form>


</x-modal>
