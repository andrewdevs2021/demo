<div>
    <label for="" class="block text-sm font-medium text-gray-600 mb-1">{{ $label }}</label>
    <div class="flex items-center border border-black rounded-md overflow-hidden">
        <div class="relative flex-grow">
            <select name="{{$monthFormName}}" wire:model.live="selectedMonth" id="month" value="{{$selectedMonth}}"
                class="appearance-none block w-full px-3 py-1 bg-white">
                @foreach ($months as $month)
                <option value="{{$month}}">{{$month}}</option>
                @endforeach
            </select>
            <div
                class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-gray-700">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                </svg>
            </div>
        </div>
        <span class="px-2">/</span>
        <div class="relative flex-grow">
            <select name="{{$dayFormName}}" wire:model.live="selectedDay" id="day"
               class="appearance-none block w-full px-3 py-1 bg-white">
                @foreach ($days as $day)
                <option value="{{$day}}">{{$day}}</option>
                @endforeach
            </select>
            <div
                class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-gray-700">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                </svg>
            </div>
        </div>
        <span class="px-2">/</span>
        <div class="relative flex-grow">
            <select name="{{$yearFormName}}" wire:model.live="selectedYear" id="year"
                class="appearance-none block w-full px-3 py-1 bg-white">
                @foreach ($years as $year)
                <option value="{{$year}}">{{$year}}</option>
                @endforeach
            </select>
            <div
                class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-gray-700">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                </svg>
            </div>
        </div>
    </div>
</div>
