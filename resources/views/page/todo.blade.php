<x-layout>
    <main class="flex w-screen">
        <x-Sidebar></x-Sidebar>

        <!-- Main Content -->
        <div
            class="relative  bg-[rgba(255,2555,255,1)] w-full h-[95vh] mx-5 my-5 rounded-xl items-start p-5 md:px-8  overflow-y-scroll">

            @if (session('created'))
                <x-massage color="green" text="Succes created"></x-massage>
            @endif

            @if (session('updated'))
                <x-massage color="yellow" text="Succes updated"></x-massage>
            @endif

            @if (session('deleted'))
                <x-massage color="red" text="Succes deleted"></x-massage>
            @endif


            <button data-modal-target="create" data-modal-toggle="create"
                class="fixed right-10 z-20 bottom-10 rounded-full w-16 h-16  text-xl bg-slate-800 text-white hover:scale-105">+</button>

            <!-- Header -->
            <header class="col-span-3 lg:col-span-4 h-10 flex md:flex-row flex-col md:justify-between  items-center md:mb-6 mb-16">
                <div class="flex items-center gap-5">
                    <h1 class="text-3xl   font-bold text-slate-600">YOUR TASK</h1>

                </div>
                <div class="flex ">
                    <form action="{{ url('task') }}" class="max-w-md  mx-auto" method="GET">
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
                                <a href="{{ url('task') }}" type="submit" name="status" value="Urgent"
                                    class="block w-full text-start px-4 py-2 hover:bg-slate-100 dark:hover:bg-red-600 dark:hover:text-white">
                                    all
                                </a>
                            </li>

                            <!-- Filter Urgent -->
                            <li>
                                <a href="{{ url('task/urgent') }}" type="submit" name="status" value="Urgent"
                                    class="block w-full text-start px-4 py-2 hover:bg-red-100 dark:hover:bg-red-600 dark:hover:text-white">
                                    Urgent
                                </a>
                            </li>

                            <!-- Filter Normal -->
                            <li>
                                <a href="{{ url('task/normal') }}" type="submit" name="status" value="Normal"
                                    class="block w-full text-start px-4 py-2 hover:bg-green-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Normal
                                </a>
                            </li>

                            <!-- Filter Important -->
                            <li>
                                <a href="{{ url('task/important') }}" type="submit" name="status" value="Important"
                                    class="block w-full text-start px-4 py-2 hover:bg-yellow-100 dark:hover:bg-yellow-600 dark:hover:text-white">
                                    Important
                                </a>
                            </li>

                            <!-- finish -->
                            <li>
                                <a href="{{ url('task/finish') }}" type="submit" name="status" value="Important"
                                    class="block w-full text-start px-4 py-2 hover:bg-blue-100 dark:hover:bg-yellow-600 dark:hover:text-white">
                                    finished
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </header>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                @foreach ($data as $tasks)
                    <x-task :task="$tasks"></x-task>
                @endforeach
            </div>


        </div>


    </main>
</x-layout>

{{-- create --}}
<x-modal idmodal="create" >

    <div class="relative w-[30rem] bg-white rounded-lg shadow dark:bg-gray-700 -translate-y-4 pb-4">
        
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Create New Task
            </h3>
            <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <form class="p-4 md:p-5 mb-2 flex flex-col gap-6" method="POST">
            @csrf
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">add
                    title</label>
                 <input type="text" name="title" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">add
                    description</label>
                <input type="text" name="description" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>


            <button id="dropdownRadioBgHoverButton00" data-dropdown-toggle="dropdownRadioBgHover00"
                class="text-white bg-slate-600 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">choose status <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownRadioBgHover00"
                class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownRadioBgHoverButton00">
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="status-4" type="radio" value="urgent" name="status"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="status-4"
                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">urgent</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input checked id="status-5" type="radio" value="important" name="status"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="status-5"
                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">important</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="status-6" type="radio" value="normal" name="status"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="status-6"
                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">normal</label>
                        </div>
                    </li>
                </ul>
            </div>


            <x-button type="submit">Create Task</x-button>

        </form>
    </div>


</x-modal>
