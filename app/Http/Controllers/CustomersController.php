<?php

namespace App\Http\Controllers;

use App\Klientas;
use App\Vartotojai;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $allKlientai = Klientas::with('paskyra')->get();
        return view('customers', compact('allKlientai'));
    }

}
