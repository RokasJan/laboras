<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kebulo_tipas extends Model
{
    protected $table = 'kebulu_tipai';

    protected $fillable = ['id_Kebulu_tipai', 'name'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
