<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uzsakymas extends Model
{
    protected $table = 'uzsakymas';

    protected $fillable = ['automobilio_komplektacija', 'busena', 'fk_Klientasid_Klientas', 'fk_Automobilisid_Automobilis'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
