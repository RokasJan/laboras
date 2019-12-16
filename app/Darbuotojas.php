<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darbuotojas extends Model
{
    protected $table = 'darbuotojas';

    protected $fillable = ['id_Darbuotojas', 'fk_Paskyraid_Paskyra'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;

    public function paskyra()
    {
        return $this->hasMany('App\Vartotojai', 'id', 'fk_Paskyraid_Paskyra');
    }
}
