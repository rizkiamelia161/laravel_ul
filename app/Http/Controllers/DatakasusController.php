<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatakasusController extends Controller
{
    public function showdatakasus(){
        return view('datakasus');
    }
}
