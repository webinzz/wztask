@props(['data'])

<div class="relative col-span-2 shadow-sm p-5 rounded-lg min-h-72 overflow-hidden  flex justify-between flex-col   ">
    <div class="flex justify-between items-start z-20">
        <div class="">
            <h4 class="font-semibold text-sm text-white">{{ $data->target_value }} :</h4>
            <h4 class="font-semibold text-lg text-white">{{ $data->current_value }}</h4>
        </div>

        <button id="doubleDropdownButton{{ $data->id }}" data-dropdown-toggle="doubleDropdown{{ $data->id }}"
            data-dropdown-placement="right-start" type="button"
            class="bg-white opacity-75 w-10 h-10  rounded-full hover:scale-110">
            <span class="material-symbols-outlined -translate-x-0 text-lg text-black  ">more_vert</span>
        </button>
    </div>

    <div class="flex flex-col z-20 ">
        <div class="flex justify-between items-end translate-y-3">
            <h4 class="font-bold text-2xl text-white m-0">{{ $data->title }}</h4>

            <p class="text-right text-sm mt-1 text-white text-opacity-80">{{ $data->current_persen }}% Complete</p>

        </div>
        <div class="mt-4 bg-white bg-opacity-20 rounded-full h-2.5">
            <div class="bg-white h-2.5 rounded-full" style="width: {{ $data->current_persen }}%;"></div>
        </div>

    </div>

    <div class="w-full rounded h-full absolute bg-gradient-to-r to-transparent z-10 right-0 top-0
{{ $data->timeline == 'day' ? 'from-green-400 ' : ($data->timeline == 'week' ? 'from-blue-400 ' : ($data->timeline == 'month' ? 'from-orange-300 ' : 'from-purple-400')) }}
    
    "></div>

    <img src="{{ asset('storage/' . $data->image) }}"
        class="w-full absolute right-0 top-0 h-full opacity-50 z-0 object-cover object-right" alt="">


</div>

{{-- dropdown --}}
<div id="doubleDropdown{{ $data->id }}"
    class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 cursor-pointer">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
        <li>
            <a data-modal-target="edit{{ $data->id }}" data-modal-toggle="edit{{ $data->id }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                <span class="material-symbols-outlined text-sm me-2">
                    edit
                </span>
                Edit</a>
        </li>
        <li>
            <a data-modal-target="delete{{ $data->id }}" data-modal-toggle="delete{{ $data->id }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                <span class="material-symbols-outlined text-sm me-2">
                    delete
                </span>
                Delete</a>
        </li>
        <li>
            <form action="{{ url('goals/' . $data->id) }}" method="POST">
                @csrf
                @method('put')
                <input name="title" value="{{ $data->title }}" hidden>
                <input name="target_value" value="{{ $data->target_value }}" hidden>
                <input name="current_value" value="{{ $data->current_value }}" hidden>
                <input name="image" value="{{ $data->image }}" hidden>
                <input name="timeline" value="{{ $data->timeline }}" hidden>
                <input name="current_persen" value="100" hidden>
                <input name="status" value="completed" hidden>
                <button type="submit" href="#"
                    class="w-full text-start block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <span class="material-symbols-outlined text-sm me-2">
                        check_circle
                    </span>
                    Done</button>
            </form>

        </li>

    </ul>
</div>

{{-- edit form --}}
<x-modal idmodal="edit{{ $data->id }}">
    <div class="relative w-[50rem] bg-white rounded-lg shadow dark:bg-gray-700 -translate-y-4 pb-4">

        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-slate-700 dark:text-white">
                Edit New Goal
            </h3>
            <button type="button"
                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-slate-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="edit{{ $data->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <form method="post" action="{{ url('goals/' . $data->id) }}"
            class="flex md:flex-row flex-col gap-4 p-4 md:p-5 justify-between" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="flex  items-center justify-center md:w-1/2">
                <label for="dropzone-file{{ $data->id }}"
                    class="relative flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointe dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <img src="{{ asset('storage/' . $data->image) }}" class="absolute w-full h-full object-contain"
                        alt="">
                    <div
                        class="flex flex-col z-20 items-center justify-center pt-5 pb-6 bg-[rgba(255,255,255,.8)] rounded-lg">
                        <svg class="w-8 h-8 mb-4 text-gray-800 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-center text-gray-800 dark:text-gray-400 p-4"><span
                                class="font-semibold">Click to upload</span> or drag and drop</p>
                    </div>
                    <input name="image" id="dropzone-file{{ $data->id }}" type="file" class="hidden" />
                </label>
            </div>

            <div class=" flex flex-col md:w-1/2 gap-3 px-5">
                <div>
                    <label for="title" class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Title
                        :</label>
                    <x-input name="title" type="text" value="{{ $data->title }}"
                        class="block w-full border-slate-400 rounded-lg focus:border-slate-500 text-slate-500 focus:ring-slate-700"></x-input>
                </div>

                <div>
                    <label for="target_value"
                        class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Target Value :</label>
                    <x-input name="target_value" type="text" value="{{ $data->target_value }}"
                        class="block w-full border-slate-400 rounded-lg focus:border-slate-500 text-slate-500 focus:ring-slate-700"></x-input>
                </div>

                <div>
                    <label for="current_value"
                        class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Current Value :</label>
                    <x-input name="current_value" type="text" min="0" value="{{ $data->current_value }}"
                        class="block w-full border-slate-400 rounded-lg focus:border-slate-500 text-slate-500 focus:ring-slate-700"></x-input>
                </div>

                <div>
                    <label for="current_persen"
                        class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Current Persen :</label>
                    <x-input name="current_persen" type="number" min="0" value="0"
                        value="{{ $data->current_persen }}"
                        class="block w-full border-slate-400 rounded-lg focus:border-slate-500 text-slate-500 focus:ring-slate-700"></x-input>
                </div>


                <div class="flex justify-between gap-3">
                    <div class="w-1/2">
                        <label for="timeline"
                            class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Timeline :</label>
                        <select name="timeline" id="timeline"
                            class="block w-full bg-gray-50 border border-gray-300 text-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="day" {{ $data->timeline == 'day' ? 'selected' : '' }}>day</option>
                            <option value="week" {{ $data->timeline == 'week' ? 'selected' : '' }}>week</option>
                            <option value="month" {{ $data->timeline == 'month' ? 'selected' : '' }}>month</option>
                            <option value="year" {{ $data->timeline == 'year' ? 'selected' : '' }}>year</option>
                        </select>
                    </div>

                    <div class="w-1/2">
                        <label for="status"
                            class="block mb-1 text-sm font-medium text-slate-700 dark:text-white">Status :</label>
                        <select name="status" id="status"
                            class="block w-full bg-gray-50 border border-gray-300 text-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="notstart" {{ $data->status == 'notstart' ? 'selected' : '' }}>not started
                            </option>
                            <option value="inprogres" {{ $data->status == 'inprogres' ? 'selected' : '' }}>in progres
                            </option>
                            <option value="completed" {{ $data->status == 'completed' ? 'selected' : '' }}>finsh
                            </option>
                        </select>
                    </div>

                </div>





                <x-button class="p-3 rounded-xl" type="submit">Create goals</x-button>
            </div>
        </form>
    </div>


</x-modal>


{{-- delete --}}
<x-modal idmodal="delete{{ $data->id }}">
    <div class="relative w-[30rem] bg-white rounded-lg shadow dark:bg-gray-700 -translate-y-4 pb-4">

        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Delete This goal
            </h3>
            <button type="button"
                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="delete{{ $data->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>


        <div class="p-4 md:p-5 text-center">
            <svg class="mx-auto mb-4 text-red-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <h3 class="mb-5 text-lg font-normal text-slate-800 dark:text-gray-400">Are you sure you want to delete this
                product?</h3>
            <form action="{{ url('goals/' . $data->id) }}" method="POST">
                @csrf
                @method('delete')
                <button data-modal-hide="popup-modal" type="submit"
                    class="text-white w-full mt-5  bg-red-800 hover:opacity-75 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 justify-center">
                    Yes, I'm sure
                </button>

            </form>
        </div>
    </div>
</x-modal>
