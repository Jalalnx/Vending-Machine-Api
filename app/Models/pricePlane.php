<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;


class pricePlane extends Model
{
    use HasFactory,SoftDeletes; //Prunable
    
    protected $guarded = [];


//     public function prunable()
// {
//   return static::where('created_at', '<=', now()->subWeek());
// }
// $schedule->command('model:prune')->daily();
}