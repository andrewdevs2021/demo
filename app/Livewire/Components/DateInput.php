<?php

namespace App\Livewire\Components;

class DateInput extends MainInput
{
    public $selectedMonth = '1';
    public $selectedDay = '1';
    public $selectedYear = '2024';

    public $monthFormName;
    public $dayFormName;
    public $yearFormName;

    public $months = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
    public $days = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'];
    public $years = [];

    public function getYears()
    {
        $this->years = [];
        $currentYear = now()->year;
        $startYear = $currentYear - 100;
        for ($i = $startYear; $i <= $currentYear; $i++) {
            array_push($this->years, $i);
        }
    }

    public function updatedSelectedMonth($value)
    {
        $this->assignDays();
        $this->makeDate();
    }

    public function updatedSelectedYear($value)
    {
        $this->assignDays();
        $this->makeDate();
    }

    public function updatedSelectedDay($value)
    {
        $this->assignDays();
        $this->makeDate();
    }

    public function makeDate()
    {
        $dateString = $this->selectedMonth . '/' . $this->selectedDay . '/' . $this->selectedYear;
        $formattedDate = date('m/d/Y', strtotime($dateString));
        if ($this->emit != null) {
            $this->dispatch($this->emit, $formattedDate);
        }
    }

    public function assignDays()
    {
        if ($this->selectedMonth == '2') {
            $this->days = date('L', mktime(0, 0, 0, 1, 1, $this->selectedYear)) == "1" ?
                ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29'] :
                ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28'];
        } else if (in_array($this->selectedMonth, ['1', '3', '5', '7', '8', '10', '12'])) {
            $this->days = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'];
        } else {
            $this->days = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'];
        }
    }

    public function render()
    {
        $this->getYears();
        return view('livewire.components.date-input', ['days' => $this->days, 'months' => $this->months, 'years' => $this->years]);
    }
}
