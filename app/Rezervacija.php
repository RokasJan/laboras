<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    protected $table = 'rezervacija';

    protected $fillable = ['data', 'vieta', 'busena','fk_Klientasid_Klientas','fk_Automobilisid_Automobilis','id_Rezervacija'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
