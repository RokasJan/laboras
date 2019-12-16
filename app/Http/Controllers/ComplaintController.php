<?php

namespace App\Http\Controllers;

use App\Http\Requests\pridetiSkunda;
use App\Klientas;
use App\Skundas;
use App\Vartotojai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function index()
    {
        $allSkundai = Skundas::all();
        $allKlientai = Klientas::all();
        return view('complaint', compact('allSkundai','allKlientai'));
    }

    public function Skundai() //cia eis į kontrolerį
    {
        return view('addcomplaint');
    }

    public function pridejimas(pridetiSkunda $request)
    {
        $allKlientai = Klientas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        $klientas = $allKlientai->id_Klientas;

        Skundas::Create(
            [
                'priezastis' => $request -> input('priezastis'),
                'informacija' => $request -> input('informacija'),
                'data' => date("Y-m-d"),
                'fk_Klientasid_Klientas' => $klientas
            ]
        );

        return redirect('/complaint');

    }
}
