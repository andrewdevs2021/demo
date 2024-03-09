<div class="flex">
    @livewire('components.date-input', [
        'label' => 'Date of marriage',
        'monthFormName' => 'domm',
        'dayFormName' => 'domd',
        'yearFormName' => 'domy',
        'emit' => 'setMarriageDate',
    ])
    @livewire('components.dropdown-input', [
        'name' => 'country_of_marriage_id',
        'label' => 'Country of marriage',
        'query' => [
            'tableName' => 'countries',
            'key' => 'id',
            'value' => 'name',
        ],
    ])
</div>
