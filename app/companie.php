<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companie extends Model
{
    protected $table=companies;
    protected $fillable=['idTaxInformation','idGeneralInformation'];
}
