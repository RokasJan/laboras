<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Pavaru_dezes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index()
    {
        $allCars = Cars::all();

        return view('cars', compact('allCars'));
    }

    public function ajax()
    {
        $allCars = Cars::all();
        $modeliai = $allCars->sortBy('modelis')->pluck('modelis')->unique();
        $markes = $allCars->sortBy('marke')->pluck('marke')->unique();

        return view('cars', compact('allCars', 'modeliai', 'markes'));
    }

}
