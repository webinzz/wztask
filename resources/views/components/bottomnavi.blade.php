

<div class="md:hidden fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
        <a href="{{ url('/') }}" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <span class="material-icons  text-2xl text-gray-500 group-hover:text-purple-600">home</span>
            <span class="text-sm text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
        </a>
        <a href="{{ url('task') }}" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <span class="material-icons  text-2xl text-gray-500 group-hover:text-purple-600">check_circle</span>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Task</span>
        </a>
        <a href="{{ url('goals') }}" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <span class="material-icons  text-2xl text-gray-500 group-hover:text-purple-600">work</span>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Goals</span>
        </a>
        <a href="{{ url('/') }}" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <span class="material-icons  text-2xl text-gray-500 group-hover:text-purple-600">calendar_today</span>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Days</span>
        </a>
    </div>
</div>
