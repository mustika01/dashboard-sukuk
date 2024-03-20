<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderMenuController extends Controller
{
    public function viewDetailDataOrder()
    {
        return view('order.detailOrder');
    }
}
