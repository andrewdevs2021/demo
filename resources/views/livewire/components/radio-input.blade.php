<div class="mx-2 my-1">
    <label for="">{{ $label }}</label>
    <div class="flex">
        @foreach ($radios as $key => $value)
            <div class="mx-2 flex">
                <label for="{{ $name }}" class="mx-1">{{ $key }}</label>
                <input wire:model.live="selectedValue" id="{{ $key }}" name="{{ $name }}" type="radio"
                    class="block rounded border border-gray-700 px-3 py-1" wire:model="{{ $name }}"
                    autocomplete="false" aria-autocomplete="false" value="{{ $value }}">
            </div>
        @endforeach
    </div>
</div>
