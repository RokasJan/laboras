<?php

namespace App\Http\Controllers;

use App\TA;
use Illuminate\Http\Request;

class TAhistoryController extends Controller
{
    public function index()
    {
        $allHistory = TA::all();
        return view('tahistory', compact('allHistory'));
    }
}
