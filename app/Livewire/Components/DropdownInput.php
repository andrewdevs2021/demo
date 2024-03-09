<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DropdownInput extends MainInput
{
    public $query;

    public function updatedSelectedValue($value)
    {
        $this->dispatch('setFormValue', [$this->name => $value]);
    }

    public function render()
    {
        $options = DB::table($this->query['tableName'])->select(['id', 'name'])->get()->pluck('id', 'name')->toArray();
        return view('livewire.components.dropdown-input', ['options' => $options]);
    }
}
