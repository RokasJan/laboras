<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sutartis extends Model
{
    protected $table = 'sutartis';

    protected $fillable = ['id_Sutartis', 'busena', 'fk_Automobilisid_Automobilis', 'fk_Klientasid_Klientas'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;

    public function automob()
    {
        return $this->belongsTo('App\Cars', 'fk_Automobilisid_Automobilis', 'id_Automobilis');
    }
}
