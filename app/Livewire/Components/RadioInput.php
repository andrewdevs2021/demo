<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Livewire;

class RadioInput extends MainInput
{
    public $radios;

    public function updatedSelectedValue($value)
    {
        if ($this->emit != null) {
            $this->dispatch($this->emit, $value);
        }

        $this->dispatch('setFormValue', [$this->name => $value]);
    }

    public function render()
    {
        return view('livewire.components.radio-input');
    }
}
