<div class="max-w-md mx-auto p-6 bg-white rounded-md shadow-md">
    <div>
        @livewire('components.radio-input', [
            'name' => 'is_married',
            'label' => 'Are you married?',
            'emit' => 'isMarriedUpdated',
            'radios' => [
                'Yes' => 1,
                'No' => 0,
            ],
        ])
        <div  class="mt-4">
            @if ($isMarried === '1')
                @livewire('components.yes-married')
            @elseif($isMarried === '0')
                @livewire('components.not-married')
            @endif
        </div>
    </div>
</div>
