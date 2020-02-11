<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCompany', 'typeuser', 'name', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function typeuserContadorGeneral()
    {
        if ($this->typeuser === 3 || $this->typeuser === 2 || $this->typeuser === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function typeuserSubcontador()
    {
        if ($this->typeuser === 4 || $this->typeuser === 3 || $this->typeuser === 2 || $this->typeuser === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function typeuserAsistente()
    {
        if ($this->typeuser === 5 || $this->typeuser === 4 || $this->typeuser === 3 || $this->typeuser === 2 || $this->typeuser === 1) {
            return true;
        } else {
            return false;
        }
    }
}
