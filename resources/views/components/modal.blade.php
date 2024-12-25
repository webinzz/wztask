@props(['idmodal','title'])

<div id="{{ $idmodal }}"   class="hidden fixed top-0 left-0 z-50 ">
    <div class="relative p-4 w-screen h-screen bg-[rgba(0,0,0,.1)]  flex justify-center items-center ">
        {{ $slot }}
        
        
    </div>
</div> 