<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\customer as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class customer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'customerId',
        'name',
        'number',
        'address',
        'connectiondate',
        'connectiontype',
        'nudNo',
        'area',
        'number',
    ];

    protected $hidden = [
        'customerPass',
    ];
}
