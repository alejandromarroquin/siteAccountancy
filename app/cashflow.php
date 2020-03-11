<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cashflow extends Model
{
    protected $fillable=['idsubaccountdeb','idsubaccountcred','typetypeflow','activity','concept','amount'];
}
