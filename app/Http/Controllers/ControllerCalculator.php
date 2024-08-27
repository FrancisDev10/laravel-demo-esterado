<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCalculator extends Controller
{
    public function showCalculatorPage()
    {
        return view('mypages.calculator');
    }
}
