<?php

namespace App;

use App\Http\Requests\pridetiSkunda;
use Illuminate\Database\Eloquent\Model;

class Skundas extends Model
{
    protected $table = 'skundas';

    protected $fillable = ['priezastis', 'informacija', 'data', 'id_Skundas', 'fk_Klientasid_Klientas'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
