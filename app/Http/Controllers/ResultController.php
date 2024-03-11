<?php

namespace App\Http\Controllers;

use App\Models\UserInformation;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index($id)
    {
        $data = UserInformation::with([
            'city', 'country', 'marriageCountry'
        ])->find($id);
        return view('result', ['data' => $data]);
    }
}
