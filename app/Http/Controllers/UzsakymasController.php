<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Http\Requests\PridetiUzsakyma;
use App\Klientas;
use App\Uzsakymas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UzsakymasController extends Controller
{
    public function index()
    {
        $allAutomobiliai = Cars::where('pozymis', '=', '0')->get();
        return view('komplektuotis',compact('allAutomobiliai'));
    }

    public function prideti(PridetiUzsakyma $request)
    {
        $allKlientai = Klientas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        $klientas = $allKlientai->id_Klientas;
        Uzsakymas::Create(
            [
                'fk_Automobilisid_Automobilis' => $request -> input('auto'),
                'fk_Klientasid_Klientas' => $klientas,
                'busena' => '0',
                'automobilio_komplektacija' => $request -> input('automobilio_komplektacija'),
            ]
        );

        return redirect('/individual');
    }

    
}
