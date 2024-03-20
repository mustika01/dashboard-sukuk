<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParameterMenuController extends Controller
{
    public function viewInputJobParameter()
    {
        return view('parameter.inputJob');
    }

    public function viewInputCityCode()
    {
        return view('parameter.inputCity');
    }
}
