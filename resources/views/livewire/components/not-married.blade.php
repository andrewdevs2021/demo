<div>
    @livewire('components.radio-input', [
        'name' => 'is_widowed',
        'label' => 'Are you widowed?',
        'radios' => [
            'Yes' => 1,
            'No' => 0,
        ],
    ])
    @livewire('components.radio-input', [
        'name' => 'is_passed_married',
        'label' => 'Have you ever been married in the past?',
        'radios' => [
            'Yes' => 1,
            'No' => 0,
        ],
    ])
</div>
