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


