<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cashflow extends Model
{
    protected $fillable=['idsubaccountdeb','idsubaccountcred','type','activity','concept','amount'];
}
