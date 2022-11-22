<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\deposit
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|deposit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|deposit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|deposit query()
 * @method static \Illuminate\Database\Eloquent\Builder|deposit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|deposit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|deposit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class deposit extends Model
{
    use HasFactory;
    // use SoftDeletes;
      protected $dates = ['deleted_at'];
}