<?php

namespace App\Http\Controllers;

use App\Komentarai;
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
        //$allKlientai= receptas::all();
        return view('addcomment');
    }

}
