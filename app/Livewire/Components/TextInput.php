<?php

namespace App\Livewire\Components;

use Livewire\Component;

class TextInput extends MainInput
{
    public $type;

    public function updatedSelectedValue($value)
    {
        $this->dispatch('setFormValue', [$this->name => $value]);
    }

    public function render()
    {
        return view('livewire.components.text-input');
    }
}
