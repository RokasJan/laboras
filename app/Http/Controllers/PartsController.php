<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartsController extends Controller
{
    public function index()
    {
        return view('parts');
    }
}
