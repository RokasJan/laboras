<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Pavaru_dezes;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $allCars = Cars::all();
        return view('cars', compact('allCars'));
    }
}
