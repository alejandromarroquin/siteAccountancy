<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class budgets extends Model
{
    protected $fillable=['idAccountancy','concept','amount'];
}
