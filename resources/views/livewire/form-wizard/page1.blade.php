<div class="flex">
    @livewire('components.text-input', ['type' => 'text', 'name' => 'first_name', 'label' => 'First name'])
    @livewire('components.text-input', ['type' => 'text', 'name' => 'last_name', 'label' => 'Last name'])
    @livewire('components.text-input', ['type' => 'text', 'name' => 'address', 'label' => 'Address'])
    @livewire('components.country-city-input')
    @livewire('components.date-input', [
        'label' => 'Date Of Birth',
        'monthFormName' => 'dobm',
        'dayFormName' => 'dobd',
        'yearFormName' => 'doby',
        'emit'=>'setBirthDate'
    ])
</div>
