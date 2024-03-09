<?php

namespace App\Livewire\Components;

use Livewire\Component;

class MainInput extends Component
{
    public $name = null;
    public $label;
    public $emit = null;
    public $selectedValue = null;
    public $isRequired = false;
}
