<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PakaitinisAutomobilis extends Model
{
    protected $table = 'pakaitinis_automobilis';

    protected $fillable = ['Data', 'fk_Klientasid_Klientas', 'fk_Automobilisid_Automobilis ', 'fk_Automechanikasid_Automechanikas'];

    /* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
    public $timestamps = false;
}
