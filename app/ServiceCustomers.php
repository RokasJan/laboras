<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCustomers extends Model
{
    protected $table = 'registracija';

    protected $fillable = ['data', 'vieta', 'priezastis','fk_Klientasid_Klientas'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;

    public function servicecust()
    {
        return $this->belongsTo('App\Klientai', 'fk_Klientasid_Klientas', 'id_Klientas');
    }
}
