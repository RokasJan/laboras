<?php

namespace App\Http\Controllers;

use App\Darbuotojas;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    public function index()
    {
        $darbuotojai = Darbuotojas::all();
        return view('workers', compact('darbuotojai'));
    }

    public function registruoti()
    {
        echo "hey ;)";
    }
}
