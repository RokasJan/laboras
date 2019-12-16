<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registracija extends Model
{
    protected $table = 'registracija';

    protected $fillable = ['data','laikas','vieta','priezastis', 'fk_Klientasid_Klientas', 'fk_Automechanikasid_Automechanikas'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
