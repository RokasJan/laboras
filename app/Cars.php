<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'automobilis';

    protected $fillable = ['marke', 'modelis', 'pagaminimo_data', 'vietu_skaicius', 'modifikacija','pozymis','pavaru_deze','kuro_tipas','kebulas','id_Automobilis'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;

    public function pavdez()
    {
        return $this->belongsTo('App\Pavaru_dezes', 'pavaru_deze', 'id_Pavaru_dezes');
    }

    public function kurtip()
    {
        return $this->belongsTo('App\Kuro_tipas', 'kuro_tipas', 'id_Kuro_tipas');
    }

    public function kebtip()
    {
        return $this->belongsTo('App\Kebulo_tipas', 'kebulas', 'id_Kebulu_tipai');
    }
}
