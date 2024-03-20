<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationMenuController extends Controller
{
    public function viewDownloadDataReason()
    {
        return view('registration.download');
    }

    public function viewUploadDataReason()
    {
        return view('registration.upload');
    }

    public function viewDataMaster()
    {
        return view('registration.dataMaster');
    }
}
