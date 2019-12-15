<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Pavaru_dezes;
use Illuminate\Http\Request;

class PavaruDezesController extends Controller
{
    public function index()
    {
        $allCars = Pavaru_dezes::all();
        return view('cars', compact('allCars'));
    }
}
