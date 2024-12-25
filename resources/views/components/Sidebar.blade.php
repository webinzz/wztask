    <aside class="w-80  h-screen hidden md:block  ">
        <!-- Logo -->
        <div class="flex items-center ps-2.5 my-10 m-7">
            <img  src="{{ asset('assets/logo.png') }}" class="h-6 me-3 sm:h-9  rounded-md"  />
            <span class=" self-center text-[25px] font-semibold  text-white">WZTASK</span>
        </div>
        <!-- Navigation -->
        <nav class="mt-4 text-white">
            <ul>
                <li>
                    <a href="{{ url("/") }}"
                        class="text-lg  flex items-center p-3 px-10 hover:border-l-8 duration-100  transition-all">
                        <span class="material-icons me-3 text-[27px]">home</span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url("task") }}"
                        class="text-lg flex items-center p-3 px-10 hover:border-l-8 duration-100  transition-all">
                        <span class="material-icons me-3 text-[27px]">check_circle</span>
                        Tasks
                    </a>
                </li>
                <li>
                    <a href="{{ url("goals") }}"
                        class="text-lg flex items-center p-3 px-10 hover:border-l-8 duration-100  transition-all">
                        <span class="material-icons me-3 text-[27px]">work</span>
                        Goals
                    </a>
                </li>
                <li>
                    <a href="{{ url("myday") }}"
                        class="text-lg flex items-center p-3 px-10 hover:border-l-8 duration-100  transition-all">
                        <span class="material-icons me-3 text-[27px]">calendar_today</span>
                        myday   
                    </a>
                </li>
            </ul>

        </nav>
    </aside>

