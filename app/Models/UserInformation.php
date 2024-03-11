<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'city_id',
        'country_of_marriage_id',
        'first_name',
        'last_name',
        'address',
        'date_of_birth',
        'is_married',
        'date_of_marriage',
        'is_widowed',
        'is_passed_married',
    ];

    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }

    public function marriageCountry(){
        return $this->belongsTo(Country::class,'country_of_marriage_id');
    }

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
}
