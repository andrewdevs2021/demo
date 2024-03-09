<div class="mx-2">
    <label for="{{ $name }}">{{ $label }}</label>
    <input id="{{ $name }}" type="{{ $type }}" class="block rounded border border-gray-700 px-3 py-1"
        wire:model.live="selectedValue" autocomplete="false" aria-autocomplete="false">
</div>
