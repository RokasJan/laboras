<?php

namespace App\Http\Controllers;

use App\Sutartis;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index()
    {
        $allSutartis = Sutartis::all();
        return view('contracts', compact('allSutartis'));
    }

}
