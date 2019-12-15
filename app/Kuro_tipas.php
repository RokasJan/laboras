<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuro_tipas extends Model
{
    protected $table = 'kuro_tipas';

    protected $fillable = ['id_Kuro_tipas', 'name'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
