<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;



/**
 * App\Models\pricePlane
 *
 * @property int $id
 * @property string $palne
 * @property string $cost
 * @property string $active
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane query()
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane wherePalne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pricePlane whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class pricePlane extends Model
{
    // use SoftDeletes;
  use HasFactory; 
    
    
    protected $guarded = [];

    protected $hidden = ['deleted_at'];


//     public function prunable()
// {
//   return static::where('created_at', '<=', now()->subWeek());
// }
// $schedule->command('model:prune')->daily();
}