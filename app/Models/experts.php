<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experts extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'experts';
    protected $fillable = [
        'id_expert',
        'name',
        'email',
        'password',
        'balance'
    ];
}
