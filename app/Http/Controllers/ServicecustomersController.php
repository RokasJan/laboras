<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerforservice;
use App\Klientas;
use App\ServiceCustomers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicecustomersController extends Controller
{
    public function index()
    {
        $allService = ServiceCustomers::all();
        return view('servicecustomers', compact('allService'));
    }

    public function reg()
    {
        $allKlientai = Klientas::all();
        return view('registruoti', compact('allKlientai'));
    }

    public function prideti(registerforservice $request)
    {
        $allKlientai = Klientas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        $klientas = $allKlientai->id_Klientas;
        ServiceCustomers::Create(
            [
                'data' => $request -> input('data'),
                'vieta' => $request -> input('vieta'),
                'priezastis' => $request -> input('priezastis'),
                'fk_Klientasid_Klientas' => $klientas,
            ]
        );

        return redirect('/servicecustomers');
    }
}
