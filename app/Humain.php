<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humain extends Model
{
    protected $fillable = [
        'name', 'email','First_date','Last_date','Matricule'
    ];
}
