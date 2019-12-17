<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Http\Requests\pridetisutarti;
use App\Klientas;
use App\Sutartis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SutartisController extends Controller
{
    public function index()
    {
        $allAutomobiliai = Cars::where('pozymis', '=', '0')->get();
        return view('buy', compact('allAutomobiliai'));
    }

    public function prideti(pridetisutarti $request)
    {
        $allKlientai = Klientas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        $klientas = $allKlientai->id_Klientas;
        Sutartis::Create(
            [
                'fk_Automobilisid_Automobilis' => $request -> input('auto'),
                'fk_Klientasid_Klientas' => $klientas,
                'busena' => '0'
            ]
        );

        return redirect('/contracts');
    }

    public function patvirtinimas($id_Sutartis)
    {
        Sutartis::where('id_Sutartis',$id_Sutartis)->update(
            [
                'busena' => '1'
            ]
        );
        return redirect('/contracts');
    }
}
