<?php

namespace App\Http\Controllers;

use App\Klientas;
use App\Uzsakymas;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    public function index()
    {
        $allUzsakymai = Uzsakymas::all();
        $allKlientai = Klientas::all();
        return view('individual',compact('allUzsakymai', 'allKlientai'));
    }
}
