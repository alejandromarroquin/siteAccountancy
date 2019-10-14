<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addresse extends Model
{
    protected $fillable=['street','colony','state','city','numExt','numInt','postalCode','reference','country'];
}
