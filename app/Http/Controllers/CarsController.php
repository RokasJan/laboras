<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Http\Requests\newautoadd;
use App\Kebulo_tipas;
use App\Kuro_tipas;
use App\Pavaru_dezes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index()
    {
        $allCars = Cars::all();
        return view('cars', compact('allCars'));
    }

    public function redagavimas($id_Automobilis)
    {
        $automobilis=Cars::where('id_Automobilis',$id_Automobilis)->first();
        $kebulai=Kebulo_tipas::all();
        $kuras=Kuro_tipas::all();
        $deze=Pavaru_dezes::all();
        return view('redaguotiauto', compact('automobilis', 'kebulai', 'kuras', 'deze'));
    }

    public function patvirtinimas($id_Automobilis, newautoadd $request)
    {
        Cars::where('id_Automobilis',$id_Automobilis)->update(
            [
                'marke' => $request -> input('marke'),
                'modelis' => $request -> input('modelis'),
                'pagaminimo_data' => $request -> input('pagaminimo_data'),
                'vietu_skaicius' => $request -> input('vietu_skaicius'),
                'modifikacija' => $request -> input('modifikacija'),
                'pozymis' => $request -> input('pozymis'),
                'pavaru_deze' => $request -> input('pavaru_deze'),
                'kuro_tipas' => $request -> input('kuro_tipas'),
                'kebulas' => $request -> input('kebulas'),
            ]
        );
        return redirect('/cars');
    }

    public function prideti()
    {
        $pavaruDeze = DB::table('pavaru_dezes')->get();
        $kuroTipas = DB::table('kuro_tipas')->get();
        $kebuloTipas = DB::table('kebulu_tipai')->get();
        return view('cars_add', compact('pavaruDeze', 'kuroTipas', 'kebuloTipas'));
    }

    public function baigtiPrideti(Request $request)
    {

        cars::create([
            'marke'=>$request->input('marke'),
            'modelis'=>$request->input('modelis'),
            'pagaminimo_data'=>$request->input('data'),
            'vietu_skaicius'=>$request->input('vietos'),
            'pavaru_deze'=>$request->input('pavaros'),
            'kuro_tipas'=>$request->input('kuras'),
            'kebulas'=>$request->input('kebulas'),
            'pozymis'=>0

        ]);
        return redirect('/cars');
    }

}
