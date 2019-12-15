<?php

namespace App;

use App\Http\Requests\pridetikomentara;
use Illuminate\Database\Eloquent\Model;

class Komentarai extends Model
{
    protected $table = 'atsiliepimas';

    protected $fillable = ['komentarai', 'data', 'id_Atsiliepimas',	'fk_Klientasid_Klientas'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;

    public function koment()
    {
        return $this->belongsTo('App\Klientas', 'fk_Klientasid_Klientas', 'id_Klientas');
    }

    public function pridejimas(pridetikomentara $request)
    {
        Komentarai::Create(
            [
                'vardas' => $request -> input('vardas'),
                'komentarai' => $request -> input('komentarai'),
                'data' => date("Y-m-d"),
            ]
        );

        return redirect('/comments');

    }
}
