<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index()
    {
        $allCars = Cars::all();
//        $books = Cars::where('marke', 'LIKE', '%' . $input . '%')
//            ->get();
        return view('cars', compact('allCars'));
    }

//    public function filtruoti($index)
//    {
//        if($index = null) {
//            $allCars = Cars::all();
//            return view('cars', compact('allCars'));
//        }
//        else {
//            $marke = Cars::where('marke', '=', $index)->get();
//
//            return view('cars', compact('marke'));
//        }
//    }

}
