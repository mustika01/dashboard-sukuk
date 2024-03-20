<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EarlyRedemptionMenuController extends Controller
{
    public function viewDetailDataRedemption()
    {
        return view('early-redemption.redemption');
    }
}
