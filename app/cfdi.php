<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cfdi extends Model
{
      protected $fillable=['idCompany','idMethodPayment','idwaypay','customer','currency','condicspay','subtotal','iva','total'];
}
