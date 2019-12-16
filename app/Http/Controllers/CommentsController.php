<?php

namespace App\Http\Controllers;

use App\Http\Requests\pridetikomentara;
use App\Klientas;
use App\Komentarai;
use App\Vartotojai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function index()
    {
        $allKomentarai = Komentarai::all();
        return view('comments', compact('allKomentarai'));
    }

    public function Komentaras()
    {
        return view('addcomment');
    }

    public function pridejimas(pridetikomentara $request)
    {
        $allKlientai = Klientas::where('fk_Paskyraid_Paskyra', Auth::user()->id)->first();
        $klientas = $allKlientai->id_Klientas;

        Komentarai::Create(
            [
                'slapyvardis' => $request -> input('slapyvardis'),
                'komentarai' => $request -> input('komentarai'),
                'data' => date("Y-m-d"),
                'fk_Klientasid_Klientas' => $klientas
            ]
        );

        return redirect('/comments');

    }
}
