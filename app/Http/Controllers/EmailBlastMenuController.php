<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailBlastMenuController extends Controller
{
    public function viewOwnerConfirmationEmail()
    {
        return view('email-blast.ownerConfirmation');
    }

    public function viewEmailInformation()
    {
        return view('email-blast.information');
    }
}
