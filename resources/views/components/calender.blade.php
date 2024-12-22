<div>
    <div class="bg-white p-4 shadow rounded">
        <h3 class="font-bold text-lg mb-4">January 2021</h3>
        <div class="grid grid-cols-7 text-center">
            <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span>
            <span>Thu</span><span>Fri</span><span>Sat</span>
            <!-- Dates -->
            @for ($i = 1; $i <= 31; $i++)
                <span class="p-1">{{ $i }}</span>
            @endfor
        </div>
    </div>    
</div>




{{-- dropdown --}}
<div id="doubleDropdown{{ $task->id }}" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 cursor-pointer">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
      <li>
        <a data-modal-target="edit{{ $task->id }}" data-modal-toggle="edit{{ $task->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
          <span class="material-symbols-outlined text-sm me-2">
            edit
            </span>
          Edit</a>
      </li>
      <li>
        <a data-modal-target="delete{{ $task->id }}" data-modal-toggle="delete{{ $task->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
          <span class="material-symbols-outlined text-sm me-2">
            delete
            </span>
          Delete</a>
      </li>
      <li>
        <form action="{{ url('task/'. $task->id ) }}" method="POST">
          @csrf
          @method('put')
          <input  name="title" value="{{ $task->title }}" hidden>
          <input  name="description" value="{{ $task->description }}" hidden>
          <input  name="status" value="finish" hidden>
          <button type="submit" href="#" class="w-full text-start block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            <span class="material-symbols-outlined text-sm me-2">
              check_circle
              </span>
            Done</button>
        </form>
        
      </li>

    </ul>
</div>

{{-- edit form --}}
<x-modal idmodal="edit{{ $task->id }}" title="edit this task">
  <form action="{{ url('task/'. $task->id ) }}" class="p-4 md:p-5 flex flex-col gap-6" method="POST">
    @method("PUT")
    @csrf
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">add title</label>
        <input value="{{ $task->title }}" type="text" name="title" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
    </div>
    
    <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">add description</label>
        <input value="{{ $task->description }}" type="text" name="description" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
    </div>
    
    
  <button id="dropdownRadioBgHoverButton{{ $task->id }}" data-dropdown-toggle="dropdownRadioBgHover{{ $task->id }}" class="text-white bg-slate-600 hover:bg-slate-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">choose status <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
  </button>

    {{-- dropdown status --}}
  <div id="dropdownRadioBgHover{{ $task->id }}" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
      <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioBgHoverButton{{ $task->id }}">
        <li>
          <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
              <input {{ $task->status === 'normal' ? 'checked' : '' }} id="status-6{{ $task->id }}" type="radio" value="normal" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
              <label for="status-6{{ $task->id }}" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">normal</label>
          </div>
        </li>

        <li>
          <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
              <input {{ $task->status === 'important' ? 'checked' : '' }} id="status-5{{ $task->id }}" type="radio" value="important" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
              <label for="status-5{{ $task->id }}" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">important</label>
          </div>
        </li>
        
        <li>
          <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
              <input {{ $task->status === 'urgent' ? 'checked' : '' }} id="status-8{{ $task->id }}" type="radio" value="urgent" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
              <label for="status-8{{ $task->id }}" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">urgent</label>
          </div>
        </li>
      </ul>
  </div>


  <x-button>Update Task</x-button>
</form>

</x-modal>

{{-- delete --}}
<x-modal idmodal="delete{{ $task->id }}" title="delete this task">
  <div class="p-4 md:p-5 text-center">
    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
    </svg>
    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
    <form action="{{ url('task/'. $task->id ) }}" method="POST">
      @csrf
      @method('delete')
      <button data-modal-hide="popup-modal" type="submit" class="text-white w-full  bg-slate-800 hover:opacity-75 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 justify-center">
        Yes, I'm sure
      </button>

    </form>
</div>
</x-modal>

