<?php

namespace App\Livewire\FormWizard;

use Livewire\Component;

class Page2 extends Component
{
    public $isMarried = null;


    protected $listeners = ['isMarriedUpdated'];

    public function isMarriedUpdated($value)
    {
        $this->isMarried = $value;
        $this->dispatch('compareDates');
    }

    public function render()
    {
        return view('livewire.form-wizard.page2');
    }
}
