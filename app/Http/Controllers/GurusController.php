<?php

namespace App\Http\Controllers;
use App\Models\DataGuru;

use Illuminate\Http\Request;

class GurusController extends Controller
{
    public function index(){
        $dtGuru = DataGuru::get();
        return view('gurus', ['guru' => $dtGuru]);
    }
}
