<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestdriveController extends Controller
{
    public function index()
    {
        return view('testdrive');
    }
}
