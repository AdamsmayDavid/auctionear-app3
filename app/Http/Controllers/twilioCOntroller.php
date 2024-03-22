<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class twilioCOntroller extends Controller
{
    //

    public function sendSMS(Request $request)
    {
        echo $request->number;
    }
}
