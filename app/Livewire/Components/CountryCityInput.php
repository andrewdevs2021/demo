<?php

namespace App\Livewire\Components;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class CountryCityInput extends Component
{
    public $selectedCountry = null;
    public $selectedCity = null;
    public $cities = [];

    public function updatedSelectedCountry($value)
    {
        if ($value) {
            $this->cities = City::where('country_id', $value)
                ->pluck('id','name')
                ->toArray();
        } else {
            $this->cities = [];
        }
        $this->dispatch('setFormValue', ['country_id' => $value]);
    }

    public function updatedSelectedCity($value)
    {
        $this->dispatch('setFormValue', ['city_id' => $value]);
    }

    public function render()
    {
        $options = Country::all()->pluck('id', 'name')->toArray();
        return view('livewire.components.country-city-input', ['options' => $options, 'cities' => $this->cities]);
    }
}
