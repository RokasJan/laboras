<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TA extends Model
{
protected $table = 'ta';

protected $fillable = ['Data','Problema','Automobilio_Valst_Nr', 'fk_Klientasid_Klientas'];

/* nurodome kad  nenaudosime created_at ir updated_at laukų šiame modulyje*/
public $timestamps = false;
}
