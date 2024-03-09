<div class="mx-2">
    <label for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" class="block rounded border border-gray-700 px-3 py-1"
        wire:model.live="selectedValue" autocomplete="false" aria-autocomplete="false">
        <option value="">Select ...</option>
        @foreach ($options as $key=>$value)
            <option value="{{$value}}">{{$key}}</option>
        @endforeach
    </select>
    @error($name)
        <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror
</div>
