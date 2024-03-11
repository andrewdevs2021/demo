<div class="mb-2">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-600 mb-1">{{ $label }}</label>
    <input id="{{ $name }}" type="{{ $type }}" class="block rounded border border-gray-700 mt-1 px-3 py-1 w-full"
        wire:model.live="selectedValue" autocomplete="false" aria-autocomplete="false">
</div>
