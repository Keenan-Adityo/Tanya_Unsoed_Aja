<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{
    use HasFactory, Notifiable;

   
    protected $primaryKey = 'id_cs';


    protected $fillable = [
        'username',
        'password',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
    ];

 
    protected $casts = [
        'id_cs' => 'integer',
    ];
}
