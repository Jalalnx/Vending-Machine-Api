<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saller extends Model
{
    use HasFactory;
    
     protected $guard = "Saller";
    
    protected $guarded = [];

     protected $hidden = [
        'password',
        'remember_token',
    ];
}