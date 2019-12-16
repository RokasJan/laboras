<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vadovas extends Model
{
    protected $table = 'vadovas';

    protected $fillable = ['id_Vadovas', 'fk_Paskyraid_Paskyra'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;

    public function paskyra()
    {
        return $this->hasMany('App\Vartotojai', 'id', 'fk_Paskyraid_Paskyra');
    }
}
