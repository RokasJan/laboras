<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pavaru_dezes extends Model
{
    protected $table = 'pavaru_dezes';

    protected $fillable = ['id_Pavaru_dezes', 'name'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
