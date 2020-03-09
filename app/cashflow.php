<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cashflow extends Model
{
    protected $fillable=['idaccountancydebtor','idsubaccount','type','concept','amount'];
}
