<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\setting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|setting whereValue($value)
 * @mixin \Eloquent
 */
class setting extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $dates = ['deleted_at'];
 
    protected $guarded = [];
    
    
    protected $tabl ='settings';
    
}


   