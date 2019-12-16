<?php

namespace App\Http\Controllers;

use App\Darbuotojas;
use App\Klientas;
use Illuminate\Http\Request;
use App\Http\Requests\PridetiDarbuotoja;
use Illuminate\Support\Facades\DB;

class WorkersController extends Controller
{
    public function index()
    {
        $darbuotojai = DB::table('darbuotojas')
            ->join('vartotojai','darbuotojas.fk_Paskyraid_Paskyra','=','vartotojai.id')
            ->get();

        return view('workers', compact('darbuotojai'));
    }

    public function registruoti()
    {
        return view('workers_add');
    }

    public function baigtiRegistruoti(PridetiDarbuotoja $request)
    {
        $vartotojas = DB::table('vartotojai')
            ->where('email', $request->input('pastas'))
            ->first();

        $darb = Darbuotojas::where('fk_Paskyraid_Paskyra', $vartotojas->id)->first();
        if(empty($darb))
        {
            $naujas = darbuotojas::create([
                'fk_Paskyraid_Paskyra'=> $vartotojas->id
            ]);

            Klientas::where('fk_Paskyraid_Paskyra', $vartotojas->id)->delete();
        }

        return redirect('/workers');



    }

    public function store(Request $request)
    {

    }
}
