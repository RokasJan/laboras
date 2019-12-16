<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klientas extends Model
{
    protected $table = 'klientas';

    protected $fillable = ['id_Klientas', 'fk_Paskyraid_Paskyra'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;

    public function paskyra()
    {
        return $this->hasMany('App\Vartotojai', 'id', 'fk_Paskyraid_Paskyra');
    }
}
