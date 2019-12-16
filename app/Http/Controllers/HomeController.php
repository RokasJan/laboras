<?php

namespace App\Http\Controllers;

use App\Automechanikas;
use App\Darbuotojas;
use App\Klientas;
use App\Vadovas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allKlientai = Klientas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        if($allKlientai == null){
            $klientas = null;
        }
        else
        $klientas = $allKlientai->id_Klientas;
        $allDarbuotojai = Darbuotojas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        if($allDarbuotojai == null){
            $darbuotojas = null;
        }
        else
            $darbuotojas = $allDarbuotojai->id_Darbuotojas;
        $allAutomechanikai = Automechanikas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        if($allAutomechanikai == null){
            $automechanikai = null;
        }
        else
            $automechanikai = $allAutomechanikai->id_Automechanikas;
        $allVadovai = Vadovas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        if($allVadovai == null){
            $vadovai = null;
        }
        else
            $vadovai = $allVadovai->id_Vadovas;
        if($vadovai == null and $darbuotojas == null and $automechanikai == null) {
            if ($klientas == null) {
                Klientas::Create(
                    [
                        'fk_Paskyraid_Paskyra' => Auth::user()->id
                    ]
                );
                return view('home');
            }
            else
                return view('home');
        }
        else
             return view('home');
    }
}
