<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'Automobiliai';

    //protected $fillable = ['vardas', 'turinys', 'sukurimo_data', 'fk_Receptasid_Receptas' ];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
