<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicecustomersController extends Controller
{
    public function index()
    {
        return view('servicecustomers');
    }
}
