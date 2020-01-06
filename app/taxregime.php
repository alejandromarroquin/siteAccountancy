<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taxregime extends Model
{
    protected $fillable=['code','description','fisica','moral'];
}
