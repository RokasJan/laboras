<?php

namespace App\Http\Controllers;

use App\Http\Requests\pridetikomentara;
use App\Komentarai;
use App\Vartotojai;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $allKomentarai = Komentarai::all();
        return view('comments', compact('allKomentarai'));
    }

    public function Komentaras()
    {
        $allKlientai= Vartotojai::all();
        return view('addcomment', compact('allKlientai'));
    }

    public function pridejimas(pridetikomentara $request)
    {
        Komentarai::Create(
            [
                'slapyvardis' => $request -> input('slapyvardis'),
                'komentarai' => $request -> input('turinys'),
                'data' => date("Y-m-d"),
//                'fk_Klientasid_Klientas' => $request -> input('receptas')
            ]
        );

        return redirect('/komentarai');

    }
}
