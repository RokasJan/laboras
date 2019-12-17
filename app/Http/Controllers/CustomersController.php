<?php

namespace App\Http\Controllers;

use App\Klientas;
use App\Komentarai;
use App\PakaitinisAutomobilis;
use App\Registracija;
use App\Rezervacija;
use App\Skundas;
use App\Sutartis;
use App\TA;
use App\Uzsakymas;
use App\Vartotojai;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $allKlientai = Klientas::with('paskyra')->get();
        return view('customers', compact('allKlientai'));
    }

    public function istrynimas($id_Klientas)
    {
        PakaitinisAutomobilis::where('fk_Klientasid_Klientas',$id_Klientas)->delete();
        Uzsakymas::where('fk_Klientasid_Klientas',$id_Klientas)->delete();
        Registracija::where('fk_Klientasid_Klientas',$id_Klientas)->delete();
        TA::where('fk_Klientasid_Klientas',$id_Klientas)->delete();
        Rezervacija::where('fk_Klientasid_Klientas',$id_Klientas)->delete();
        Komentarai::where('fk_Klientasid_Klientas',$id_Klientas)->delete();
        Skundas::where('fk_Klientasid_Klientas',$id_Klientas)->delete();
        Sutartis::where('fk_Klientasid_Klientas',$id_Klientas)->delete();
        Klientas::where('id_Klientas',$id_Klientas)->delete();
        return redirect('/customers')->with('success', 'Klientas pašalintas');
    }

}
