<div class="flex">
    <div class="mx-2">
        <label for="country">Country</label>
        <select id="country" class="block rounded border border-gray-700 px-3 py-1"
            wire:model.live="selectedCountry" autocomplete="false" aria-autocomplete="false">
            <option value="" selected>Select ...</option>
            @foreach ($options as $key => $value)
                <option value="{{$value}}">{{$key}}</option>
            @endforeach
        </select>

    </div>
    <div class="mx-2">
        <label for="city">City</label>
        <select id="city" class="block rounded border border-gray-700 px-3 py-1"
            wire:model.live="selectedCity" autocomplete="false" aria-autocomplete="false">
            <option value="" selected>Select ...</option>
            @foreach ($cities as $key => $value)
                <option value="{{$value}}">{{$key}}</option>
            @endforeach
        </select>

    </div>
</div>
