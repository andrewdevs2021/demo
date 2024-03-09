<div>
    <label for="">{{ $label }}</label>
    <div class="flex border border-black">
        <div>
            <select name="{{$monthFormName}}" wire:model.live="selectedMonth" id="month" value="{{$selectedMonth}}">
                @foreach ($months as $month)
                <option value="{{$month}}">{{$month}}</option>
                @endforeach
            </select>
        </div>
        /
        <div>
            <select name="{{$dayFormName}}" wire:model.live="selectedDay" id="day">
                @foreach ($days as $day)
                <option value="{{$day}}">{{$day}}</option>
                @endforeach
            </select>
        </div>
        /
        <div>
            <select name="{{$yearFormName}}" wire:model.live="selectedYear" id="year">
                @foreach ($years as $year)
                <option value="{{$year}}">{{$year}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
