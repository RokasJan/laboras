<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Http\Requests\pridetiregistracija;
use App\Klientas;
use App\Rezervacija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestdriveController extends Controller
{
    public function index()
    {
        return view('testdrive');
    }

    public function registertest()
    {
        $allAutomobiliai = Cars::where('pozymis', '=', '0')->get();
        return view('registerfortestdrive',compact('allAutomobiliai'));
    }

    public function pridejimas(pridetiregistracija $request)
    {
        $allKlientai = Klientas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        $klientas = $allKlientai->id_Klientas;
        Rezervacija::Create(
            [
                'data' => $request -> input('data'),
                'vieta' => $request -> input('vieta'),
                'fk_Klientasid_Klientas' => $klientas,
                'busena' => '0',
                'fk_Automobilisid_Automobilis' => $request -> input('auto'),
            ]
        );

        return redirect('/cars');

    }
}
