<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Crpyt;

class EncryptionController extends Controller
{
    public function encrypt(){
        $encrypted = Crypt::encryptString('hsahahha'); 
        dd($encrypted);
    }

    public function decrypt(){

    }
}
