<?php

namespace App\Livewire;

use App\Models\UserInformation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class FormWizard extends Component
{
    protected $listeners = ['setBirthDate', 'setMarriageDate', 'setFormValue','compareDates'];

    public $currentPage = 1;
    public $canSubmit = 1;

    public $birthDate = '01/01/2024';
    public $marriageDate = '01/01/2024';

    public $errorMessage = null;

    public $formData = [
        'first_name' => null,
        'last_name' => null,
        'address' => null,
        'city_id' => null,
        'country_id' => null,
        'date_of_birth' => '01/01/2024',
        'is_married' => null,
        'date_of_marriage' => '01/01/2024',
        'country_of_marriage_id' => null,
        'is_widowed' => null,
        'is_passed_married' => null
    ];

    protected $step1Rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'address' => 'required|string',
        'city_id' => 'required|numeric',
        'country_id' => 'required|numeric',
        'date_of_birth' => 'required|date',
        // Define other validation rules as needed
    ];

    protected $step2Rules = [
        'is_married' => 'required|boolean',
        'country_of_marriage_id' => 'required_if:is_married,1',
        'is_widowed' => 'required_if:is_married,0',
        'is_passed_married' => 'required_if:is_married,0',
        // Define other validation rules as needed
    ];

    public function setFormValue($object)
    {
        foreach ($object as $key => $value) {
            $this->formData[$key] = $value;
        }
    }

    public function setBirthDate($value)
    {
        $this->birthDate = $value;
        $this->compareDates();
        $this->formData['date_of_birth'] = $value;
    }

    public function newInfos()
    {
        session(['form_data' => $this->formData]);
    }

    public function setMarriageDate($value)
    {
        $this->marriageDate = $value;
        $this->compareDates();
        $this->formData['date_of_marriage'] = $value;
    }

    public function compareDates()
    {
        if ($this->birthDate != null && $this->marriageDate != null) {
            $birthDate = Carbon::createFromFormat('m/d/Y', $this->birthDate);
            $marriageDate = Carbon::createFromFormat('m/d/Y', $this->marriageDate);
            $ageAtMarriage = $birthDate->diffInYears($marriageDate,false);

            if ($ageAtMarriage < 18) {
                $this->canSubmit('You are not eligible to apply because your marriage occurred before your 18th birthday.');
            } else {
                $this->canSubmit(true);
            }
        }
    }


    public function canSubmit($value)
    {
        if ($value !== true) {
            $this->canSubmit = 0;
            $this->errorMessage = $value;
        } else {
            $this->canSubmit = 1;
            $this->errorMessage = null;
        }
    }

    public function render()
    {
        return view('livewire.form-wizard');
    }

    public function nextPage()
    {
        if ($this->validateFormData($this->step1Rules))
            $this->currentPage = 2;
    }

    public function previousPage()
    {
        $this->formData = [
            'first_name' => null,
            'last_name' => null,
            'address' => null,
            'city_id' => null,
            'country_id' => null,
            'date_of_birth' => null,
            'is_married' => null,
            'date_of_marriage' => null,
            'country_of_marriage_id' => null,
            'is_widowed' => null,
            'is_passed_married' => null
        ];
        $this->currentPage = 1;
    }

    public function submitForm()
    {
        if ($this->validateFormData($this->step2Rules)) {
            $this->formData['date_of_birth'] = Carbon::createFromFormat('d/m/Y', $this->formData['date_of_birth'])->format('Y-m-d');
            if ($this->formData['date_of_marriage'] != null)
                $this->formData['date_of_marriage'] = Carbon::createFromFormat('d/m/Y', $this->formData['date_of_marriage'])->format('Y-m-d');
            $id = UserInformation::create($this->formData)->id;
            return redirect()->to("/result/$id");
        }
    }

    protected function validateFormData($array)
    {
        $validator = Validator::make($this->formData, $array);
        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $key => $value) {
                $this->addError($key, $value[0]);
            }
            return false;
        }
        return true;
    }
}
