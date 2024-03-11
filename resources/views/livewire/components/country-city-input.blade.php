<div class="flex space-x-4 mb-2">
    <div class="w-1/2">
        <label for="country" class="block text-sm font-medium text-gray-600 mb-1">Country</label>
        <select id="country" class="block w-full px-3 py-1 border border-gray-700 rounded-md"
            wire:model.live="selectedCountry" autocomplete="false" aria-autocomplete="false">
            <option value="" selected>Select ...</option>
            @foreach ($options as $key => $value)
                <option value="{{$value}}">{{$key}}</option>
            @endforeach
        </select>

    </div>
    <div class="w-1/2">
        <label for="city" class="block text-sm font-medium text-gray-600 mb-1">City</label>
        <select id="city" class="block w-full px-3 py-1 border border-gray-700 rounded-md"
            wire:model.live="selectedCity" autocomplete="false" aria-autocomplete="false">
            <option value="" selected>Select ...</option>
            @foreach ($cities as $key => $value)
                <option value="{{$value}}">{{$key}}</option>
            @endforeach
        </select>

    </div>
</div>
