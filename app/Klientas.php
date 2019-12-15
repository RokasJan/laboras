<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klientas extends Model
{
    protected $table = 'klientas';

    protected $fillable = ['vardas', 'pavarde',	'gimimo_data', 'id_Klientas'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
